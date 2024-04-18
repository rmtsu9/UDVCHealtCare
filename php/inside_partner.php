<?php
    session_start();
    include_once('connect.php');
    $update_vote=new connect;
    $show_news=new connect;
    $data_news=$show_news->show_news();
    $logout=new connect;
    $show_partner=new connect;
    $data_partner=$show_partner->show_partner();
    $show_order_partner=new connect;
    $id=$_SESSION['id'];
    $data_order_member=$show_order_partner->show_order_partner($id);
    $in_order=new connect;
    $read_partner=new connect;
    if(isset($_GET['inside_member'])){
        $id=$_GET['inside_member'];
        $vote=$_GET['score'];
        $sumvote=$vote+1;
        $update_vote->update_vote($id,$sumvote);
        header('location:inside_partner.php');
    }
    if(isset($_POST['logout'])){
        $logout->logout();
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
<button type="submit" name="logout">logout</button>
<table border="1">
    <tr>
        <td>id</td>
        <td>news</td>
        <td>date</td>
        <td>score</td>
        <td>Vote</td>
</tr>
<?php while($fuser=mysqli_fetch_array($data_news)) { ?>
<tr>
        <td><?php echo $fuser['id']?></td>
        <td><?php echo $fuser['news']?></td>
        <td><?php echo $fuser['date']?></td>
        <td><?php echo $fuser['score']?></td>
        <td><a href="inside_partner.php?inside_member=<?php echo $fuser['id'] ?>&score=<?php echo$fuser['score'] ?>">Vote</a></td>
</tr>
<?php } ?>
</table>
</form>
<table border="1">
<tr>
            <td>ลำดับ</td>
            <td>รายการบริการ</td>
            <td>วันที่</td>
            <td>สถานะ</td>
</tr>
<?php 
$i=1;
while($fuser=mysqli_fetch_array($data_order_member)) { ?>
<tr>
        <td><?php echo $i; ?></td>
        <td><?php if($fuser['detail']=="1"){
            echo "ดูแลบริการ 1000 บาท";
        }else{
            echo "บริการขับรถ 500 บาท";
        }?></td>
        <td><?php echo $fuser['date']?></td>
        <td><form id="L" method="post">
            <select name="name">
                <option><?php echo$fuser['status'] ?></option>
                <option>พร้อมให้บริการ</option>
    </select>
        </td>
</tr>
<?php 
$i++;
} ?>
</table>

</form>
</body>
</html>