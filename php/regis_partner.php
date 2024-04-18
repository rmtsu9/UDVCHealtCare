<?php
    include_once('connect.php');
    $in_partner=new connect;
    if(isset($_POST['regis'])){
        $name=$_POST['name'];
        $lastname=$_POST['lastname'];
        $user=$_POST['user'];
        $password=$_POST['password'];
        $in_partner->in_partner($name,$lastname,$user,$password);
        header('location:login_partner.php');
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
    <div class="con"><h1>Register</h1>
    <label for="name"><p>ชื่อ</p></label>
    <input type="text" name="name" required>
    <label for="lastname"><p>นามสกุล</p></label>
    <input type="text" name="lastname" required>
    <label for="user"><p>user</p></label>
    <input type="text" name="user" required>
    <label for="password"><p>password</p></label>
    <input type="password" name="password" required>
    <button type="submit" name="regis">Register</button>
</form>
</body>
</html>