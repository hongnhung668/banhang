<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
		.tong{width: 500px; height: 300px; background: #9fc; margin: auto; border-radius: 20px;}
		div a {text-decoration: none; width: 50px;}
		.text{float: left; margin-left: 50px;}
		.text1{width: 100px; float: left; line-height: 30px; margin-left: 150px; background: #CCC; text-align: center; margin-top: 30px;  border-radius: 20px;}
	</style>
</head>

<body>
	<div class="tong">
<form method="post">
	<h1 align="center">Cập nhật quê quán</h1>
	<div class="text"><input type="text" name="txtten" placeholder="Nhập tên quê quán"></div>
    <input type="submit" name="ok" value="Thêm mới"><br>
    <div class="text1"><a href="list.php">Thoát</a></div>
</form>
<?php
 	include('connect.php');
	if(isset($_POST['ok']))
	{
		if(empty($_POST['txtten']))
		echo "<script>alert('Bạn chưa nhập dữ liệu')</script>";
		else
		{
			$sql="insert into quequan (Address) values('".$_POST['txtten']."')";
			mysqli_query ($conn, $sql);
		}
	}
?>
</div>
</body>
</html>