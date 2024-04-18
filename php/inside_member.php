<?php
    include_once('connect.php');
    $show_news=new connect;
    $data_news=$show_news->show_news();
    $update_vote=new connect;
    $logout=new connect;
    if(isset($_POST['logout'])){
        $logout->logout();
    }
    if(isset($_GET['inside_member'])){
        $id=$_GET['inside_member'];
        $vote=$_GET['score'];
        $sumvote=$vote+1;
        $update_vote->update_vote($id,$sumvote);
        header('location:inside_member.php');
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
    <button type="submit" name="logout">Logout</button>
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
    <td><?php echo$fuser['id'] ?></td>
    <td><?php echo$fuser['news'] ?></td>
    <td><?php echo$fuser['date'] ?></td>
    <td><?php echo$fuser['score'] ?></td>
    <td><a href="inside_member.php?inside_member=<?php echo$fuser['id'] ?>&score=<?php echo$fuser['score'] ?>">Vote</a></td>
</tr>
<?php } ?>
<table border="1">
    <tr>
        <td>รายการ</td>
        <td>เลือก</td>
</tr>
<tr>
    <td>ดูแลผู้สูงอายุ 1000 บาท</td>
    <td><a href="order.php?order=1">เลือก</a>
</tr>
<tr>
    <td>บริการขับรถ 500 บาท</td>
    <td><a href="order.php?order=2">เลือก</a>
</tr>
</table>
</form>
</body>
</html>