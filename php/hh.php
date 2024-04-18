<?php
    include_once('connect.php');
    $show_news=new connect;
    $data_news=$show_news->show_news();
?>
<!DOCTYPE html>
<html>
<head>
<style>
    .left{
        position: absolute;
        left: 30%;
        top: 40%;
        float: left;
    }
    .right{
        position: absolute;
        right: 30%;
        top: 40%;
        float: right;
    }
</style>
</head>
<body>
<table border="1">
    <tr>
        <td>id</td>
        <td>news</td>
        <td>date</td>
        <td>score</td>
</tr>
<?php while($fuser=mysqli_fetch_array($data_news)) { ?>
<tr>
        <td><?php echo $fuser['id']?></td>
        <td><?php echo $fuser['news']?></td>
        <td><?php echo $fuser['date']?></td>
        <td><?php echo $fuser['score']?></td>
</tr>
<?php } ?>
</table>
    <div class="left"><h1>member</h1>
    <a href="login_member.php"><button>login</button></a>
    <a href="Registration.html"><button>regis</button></a>
</div>
<div class="right"><h1>partner</h1>
    <a href="login_partner.php"><button>login</button></a>
    <a href="regis_partner.php"><button>regis</button></a>
</div>
</body>
</html>