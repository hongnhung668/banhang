<?php Session_start(); ?>


<?php
	include ('connect.php');
	$layma=$_GET['xoa'];
	echo "<h1>$layma</h1>";
	$sql="delete from dangky where ID='$layma'";
	$run=mysqli_query($conn, $sql);
	if($run) header('location:list.php');
	else echo "not finish";
?>