<html>
    <form method="POST">
        <label for="name">Username :</label>
            <input type="text" id="name" name="my_uname"><br>
            <label for="password">Password :</label>
            <input type="password" id="password" name="my_password"><br>
            <input type="submit" value="Sign up">
</form>
</html>

<?php
$my_uname = $_POST['my_uname'];
$my_password = $_POST['my_password'];

if(isset($my_uname) && isset($my_password)){
    echo "You have signed up to this awesome website!";
}else{
    echo "Did you miss some information?";
}

?>