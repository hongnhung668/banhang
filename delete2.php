<?php Session_start(); ?>


<?php
	include ('connect.php');
	$layma=$_GET['xoa'];
	echo "<h1>$layma</h1>";
	$sql="delete from themmoi where code='$layma'";
	$run=mysqli_query($conn, $sql);
	if($run) header('location:sp.php');
	else echo "not finish";
?>