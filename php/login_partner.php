<?php
    session_start();
    include_once('connect.php');
    $login_partner=new connect;
    if(isset($_POST['regis'])){
        $user=$_POST['user'];
        $password=$_POST['password'];
        if($user=="admin"and $password="1234"){
            header('location:admin.php');
        }
        $login_partner->login_partner($user,$password);
        if($_SESSION['name']){
        header('location:inside_partner.php');
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>
<form action="" method="post">
<label for="user"><p>user</p></label>
<input type="text" name="user" required>
    <label for="password"><p>password</p></label>
    <input type="password" name="password" required>
    <button type="submit" name="regis">Login</button>
</form>
</body>
</html>