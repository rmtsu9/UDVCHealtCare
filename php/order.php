<?php
    session_start();
    include_once('connect.php');
    $show_partner=new connect;
    $data_partner=$show_partner->show_partner();
    $show_order_member=new connect;
    $id=$_SESSION['id'];
    $data_order_member=$show_order_member->show_order_member($id);
    $in_order=new connect;
    $read_partner=new connect;
    $logout=new connect;
    date_default_timezone_set("America/New_York");
    if(isset($_POST['logout'])){
        $logout->logout();
    }

    if(isset($_GET['order'])){
        $_SESSION['order']=$_GET['order'];
    }
    if(isset($_GET['id_partner'])){
        $id_partner=$_GET['id_partner'];
        $id_member=$_SESSION['id'];
        $order=$_SESSION['order'];
        $date=date("Y/m/d");
        $in_order->in_order($id_partner,$id_member,$date,$order);
        header('location:order.php');
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
    <button type="submite" name="logout">Logout</button>
<table border="1">
<tr>
    <td>id</td>
    <td>name</td>
    <td>lastname</td>
    <td>||</td>
</tr>
<?php while($fuser=mysqli_fetch_array($data_partner)) { ?>
<tr>
    <td><?php echo$fuser['id']?></td>
    <td><?php echo$fuser['name']?></td>
    <td><?php echo$fuser['lastname']?></td>
    <td><a href="order.php?id_partner=<?php echo$fuser['id']?>">เลือก</a></td>
</tr>
<?php } ?>
</table>
<table border="1">
<tr>
    <td>ลำดับ</td>
    <td>รายการ</td>
    <td>ผู้บริการ</td>
    <td>สถานะ</td>
</tr>
<?php 
$i=1;
while($fuser=mysqli_fetch_array($data_order_member)) { ?>
<tr>
    <td><?php echo $i; ?></td>
    <td><?php if($fuser['detail']=="1"){
        echo "ดูแลผู้ป่วย 1000 บาท";
    }else{
        echo "บริการขับรถ 500 บาท";
    } ?></td>
    <td><?php $id=$fuser['id_partner'];
    $data_read_partner=$read_partner->read_partner($id);
    $fuse=mysqli_fetch_array($data_read_partner);
    echo $fuse['name'];
    ?></td>
    <td><?php echo$fuser['status']; ?></td>
</tr>
<?php 
$i++;
} ?>
</table>
</form>
</body>
</html>