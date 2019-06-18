<?php 
//include our cashier class
include "Cashier.php";
?>
<?php
//create a new checkout object
$c = new Checkout();
//scan items
echo $c->scan("mbp",1);
echo $c->scan("ipd", 1);
//display the price
echo "Total Price: $" . $c->total();
?>