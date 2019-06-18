<html>
    <form method="POST">
        <label for="name"> Input your name :</label>
            <input type="text" id="name" name="my_name"><br>
            <input type="submit" value="Update Name">
</form>
</html>

<?php
//get my db file
$myJsonFile = 'section1DB.json';

//get all data and decode json to php objects
$fetched_data = file_get_contents($myJsonFile);
$users = json_decode($fetched_data,true);

//update the name to myname
$users[0]['name'] = $_POST['my_name'];
//format back to json
$formatToJson = json_encode($users);
file_put_contents($myJsonFile,$formatToJson);

//show the name
echo $users[0]['name'];

//we can loop through all data if we want to change all or one node in the json file
?>