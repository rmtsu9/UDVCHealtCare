<?php
    include_once('connect.php');
    $logout=new connect;
    if(isset($_POST['logout'])){
        $logout->logout();
    }
?>
<html>
<head>
<title>new</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form action="" method="post">
<table id="Table_01" width="1800" height="800" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="4">
			<img src="images\1_01.png?1702279320" width="1800" height="239" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="images\1_02.png?1702279320" width="447" height="34" alt=""></td>
		<td rowspan="9">
			<img src="images\1_03.png?1702279320" width="1353" height="561" alt=""></td>
	</tr>
	<tr>
		<td rowspan="8">
			<img src="images\1_04.png?1702279320" width="57" height="527" alt=""></td>
		<td>
			<a href="show_member.php"><img src="images\1_05.png?1702279320" width="331" height="97" alt=""></a></td>
		<td rowspan="8">
			<img src="images\1_06.png?1702279320" width="59" height="527" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images\1_07.png?1702279320" width="331" height="30" alt=""></td>
	</tr>
	<tr>
		<td>
        <a href="show_partner.php"><img src="images\1_08.png?1702279320" width="331" height="101" alt=""></a></td>
	</tr>
	<tr>
		<td>
			<img src="images\1_09.png?1702279320" width="331" height="34" alt=""></td>
	</tr>
	<tr>
		<td>
        <a href="show_news.php"><img src="images\1_10.png?1702279320" width="331" height="97" alt=""></a></td>
	</tr>
	<tr>
		<td>
			<img src="images\1_11.png?1702279320" width="331" height="34" alt=""></td>
	</tr>
	<tr>
		<td>
			<button type="submit" name="logout"><img src="images\1_12.png?1702279320" width="331" height="97" alt=""></button></td>
	</tr>
	<tr>
		<td>
			<img src="images\1_13.png?1702279320" width="331" height="37" alt=""></td>
	</tr>
</table>
</form>
</body>
</html>