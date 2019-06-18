<html>
    <form method="GET">
        <label for="name"> Input your name :</label>
            <input type="text" id="name" name="my_name"><br>
            <input type="submit" value="Send to the backend">
</form>
</html>

<?php
$my_name = $_GET['my_name'];

if(isset($my_name)){
    echo "Hey there ".$my_name;
}else{
    echo" ";
}

?>