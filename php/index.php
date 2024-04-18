<?php
    session_start();
    include_once('connect.php');
    $login_member=new connect;
    $login_partner=new connect;
    $show_news=new connect;
    $data_news=$show_news->show_news();
    if(isset($_POST['login_p'])){
        $user=$_POST['user_p'];
        $password=$_POST['password_p'];
        if($user=="admin"and $password=="1234"){
          header('location:admin.php');
        }
        $login_partner->login_partner($user,$password);
        if($_SESSION['name']){
        header('location:inside_partner.php');
        }
    }
    if(isset($_POST['login'])){
      $user=$_POST['user'];
      $password=$_POST['password'];
      $login_member->login_member($user,$password);
      if($_SESSION['name']){
      header('location:inside_member.php');
      }
  }
    if(isset($_POST['regis_p'])){
      header('location:regis_partner.php');
    }
    if(isset($_POST['regis'])){
      header('location:regis_member.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="cssmy/Registration.css">
    <link rel="stylesheet" href="W3.CSS/w3.css">
    <link rel="stylesheet" href="W3.CSS/css">
</head>
<body>
<style>
  *{
  margin: 0;
  padding: 0;
  font-family: Arial, Helvetica, sans-serif;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  height: 100vh;
  background-color: #f4f4f4;
}
.butt {
  margin-top: 5%;
  margin-left: 12%;
  background-color: #ffffff;
}

.form-container {
  display: flex;
}
.table-container {
  padding: 20px;
  background-color: white;
  margin: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-section {
  align-items: center;
  padding: 20px;
  background-color: white;
  margin: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
  display: block;
  margin-bottom: 8px;
}

input {
  width: 100%;
  padding: 8px;
  margin-bottom: 16px;
  box-sizing: border-box;
}
.input img{
  width: 35px;
  cursor: pointer;
}
button {
  background-color: rgb(30, 207, 219);
  color: white;
  padding: 7px 15px;
  border: none;
  cursor: pointer;
  align-items: center;
}
</style>
    <table style="align-items: center;">
        <tr>
            <td>
                <div class="w3-content" style="max-width:1400px">
                    <header class="w3-container w3-center w3-padding-32"> 
                        <h1><b>Happy</b></h1>
                        <p>Welcome to the blog of <span class="w3-tag">UDVC-DBT</span></p>
                    </header>
                    <div class="form-container">
                        <div class="form-section">
                        <form action="" method="post">
                            <h1>Member Form</h1>
                                <label for="user">Username</label>
                                <input type="text" name="user" placeholder="Enter your Username">
                                <label for="password">Password</label>
                                <input type="password" name="password" placeholder="Enter your password">
                            <div class="butt">
                                <button type="submit" name="login">Login</button>
                                <button type="submit" name="regis">Register</button>
                            </div>
                        </div>
                        <div class="form-section">
                            <h1>Partner Form</h1>
                                <label for="user_p">Username</label>
                                <input type="text" name="user_p" id="user_p" placeholder="Enter your Username">
                                <label for="password_p">Password</label>
                                <input type="password" name="password_p" id="password_p" placeholder="Enter your password">
                            <div class="butt">
                                <button type="submit" name="login_p">Login</button>
                                <button type="submit" name="regis_p">Register</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </td>  
        </tr>
        <tr>
            <td>
                <h2><b>New</b></h2>
                <div class="table-container">
                <table border="1">
    <tr>
        <td>id</td>
        <td>news</td>
        <td>date</td>
        <td>||</td>
</tr>
<?php while($fuser=mysqli_fetch_array($data_news)) { ?>
<tr>
        <td><?php echo $fuser['id']?></td>
        <td><?php echo $fuser['news']?></td>
        <td><?php echo $fuser['date']?></td>
        <td><?php echo $fuser['score'] ?></td>
</tr>
<?php } ?>
</table>
                </div>
            </td>
        </tr>   
    </table>
</table>

</body>
</html>
