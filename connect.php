<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
  <?php
	$server= 'localhost';
	$user='root';
	$pass='';
	$data='web';
	$conn=mysqli_connect($server, $user, $pass, $data) or die ('Notconnect');
	mysqli_query($conn, 'set names"utf8"');
    ?>
</body>
</html>