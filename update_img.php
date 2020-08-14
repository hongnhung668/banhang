
<?php include('connect.php');?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.tong{width: 500px; height: 500px; background: #9fc; margin: auto; border-radius: 20px; text-align: center;}
		div a {text-decoration: none; width: 50px;}
		.text{ margin-top: 30px;}
		.text1{width: 100px; float: left; line-height: 30px; margin-left: 200px; background: #CCC; text-align: center; margin-top: 30px;  border-radius: 20px;}
		.cl{clear: both;}
	</style>
</head>
<body>
	<div class="tong">
<form method="post" enctype="multipart/form-data">
	<h2> CẬP NHẬT THÔNG TIN CÁ NHÂN </h2>
	<h3> Ảnh đại diện</h3>
	<div><input type="file" name="txtfile" size="300px" class="inputtext" /></div>
	<div class="text"><input type="submit" name="ok" value="Thực hiện" class="inputsubmit" /></div>
	<div class="text1"><a href="about_me.php">Thoát</a></div>
	<div class="cl"></div>
	</form>

	<?php 
	if(isset($_POST['ok']))
	{
		$session=$_SESSION['user']; 
		$tmp=$_FILES['txtfile']['tmp_name'];
		$name=$_FILES['txtfile']['name'];


      	$check = getimagesize($_FILES["txtfile"]["tmp_name"]);
      	if($check !== false) 
	    	{
		        echo "File is an image - " . $check["mime"] . ".";

				$upload=move_uploaded_file($tmp, 'img/'.$name);
				$sql="update dangky set img='$name' where Email='$session'"; 
					echo "Cập nhật thành công";
				$run=mysqli_query($conn, $sql);
				if($run)
				{
					$sql_select="select * from dangky where Email='$session'";
					$run_select=mysqli_query($conn, $sql_select);
					$row_select=mysqli_fetch_array($run_select);
				} 
				else
				{
				 	echo "Cập nhật không thành công";
				}
			}
    	else 
		    {
		        echo "File is not an image.";
		       
		    }
    }

	?>

	
	
  
	
</div>
   </body>
