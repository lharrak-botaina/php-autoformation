<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Login Page</title>
</head>
<body>
    <form action="login.php" method="post">
        enter user id/name
        <input type="text" name="username">
        <br>
        enter your password
        <input type="password" name="pass">
        <br>
        <input type="submit" value="login" name="submit">
    </form>
</body>
</html>
<?php
 if (isset($_POST['submit']))
 {
        $user = $_POST['username'];
        $pass = $_POST['pass'];
        if (($user=="botaina")&&($pass="hh"))
        {
            echo "welcome ".$user;
        }else
        {
            echo "invalid username or password";
        }
 }


?>