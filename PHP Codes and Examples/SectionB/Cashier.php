<?php
class Checkout
{
    //declare all variables
    private $name;
    private $price;
    private $sku;
    private $quantity;
    private $totalPrice = 0;

    function __construct()
    {
        
    }
    //function that takes an item id + quantity    
    function scan($itemID, $quantity)
    {
        //ensuring that the user did not input invalid string
        if ($quantity > 0 && !is_numeric($itemID)) {

            //connect to the json file
            $data = 'inventory.json';
            //convert json nodes to php objects
            $getContent  = file_get_contents($data);
            $decodedData = json_decode($getContent);
            //loop through all the json nodes
            foreach ($decodedData as $items) {
                //if the item code is found in the database
                if ($itemID == $items->SKU) {
                    //first requirement in the document
                    if ($itemID == "atv" && $quantity == 3) {
                        $this->totalPrice += $items->Price * 2;
                        
                    } 
                    //second requirement in the document
                    else if ($itemID == "ipd" && $quantity > 4) {
                        $items->Price = 499.99;
                        $this->totalPrice += $items->Price * $quantity;
                    } 
                    //third requirement in the document
                    else if ($itemID == "mbp") {
                        echo $this->scan("vga", $quantity);
                        $this->totalPrice += ($items->Price * $quantity) - $this->total();
                        
                    } 
                    //if the input does not match any of the requirements
                    else {
                        $this->totalPrice += $items->Price * $quantity;
                    }
                    //return the name, price and quantity
                    return "Item Name: " . $items->Name . " | Item Price: " . $items->Price . " | Quantity: " . $quantity . "<br>";
                }
            }
            
        } 
        //warning message if input is invalid
        else {
            echo "Warning: One or more items has invalid data ";
        }   
    }
    //return total value after calculating it
    function total()
    {
        return $this->totalPrice;
    }   
}
?>
