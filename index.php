<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contoh Session</title>
</head>
<body>

<form action="" method="post">
    Username
    <input type="text" name="username">
    <br>
    Password 
    <input type="password" name="password">
    <br>
    <input type="submit" value="Log in" name="submit">
</form>

<?php
    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if( ($user == "admin") && ($pass == "admin") ){
            session_start();
            $_SESSION['user'] = $user;
            $_SESSION['pass'] = $pass;
            header('Location: home.php');
        }
    }
?>
    
</body>
</html>