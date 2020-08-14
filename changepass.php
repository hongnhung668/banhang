<?php 
	session_start();
	if(empty($_SESSION['user']))
	{
		header('location: dangnhap.php');
	}
	else{
		$suser=$_SESSION['user'];
 ?>

<!DOCTYPE html>
<html>
 <head>
        <title>Đăng kí</title>
 
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,400i|Noto+Sans:400,400i,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">

        <style>
        	@charset "utf-8";
/* CSS Document */

*{
    margin:0;
    padding:0;
    border:none;
    font-family: 'Open Sans', sans-serif;
}
body {
    overflow: hidden;
    background-color: #ededed;
}
.to {
    display: grid;
    grid-template-columns: repeat(12,1fr);
    grid-template-rows: minmax(100px,auto);
}
 
.form {
    border: 1px solid #80808000;
    grid-column: 6/9;
    grid-row: 3;
    height: 470px;
    width: 292px;
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    border-radius: 15px;
    box-shadow: 0px 0px 14px 0px grey;
    background-color: white;
}
h2 {
    margin-top: 50px;
    margin-bottom: 30px;
}
i.fab.fa-app-store-ios {
    display: block;
    margin-bottom: 50px;
    font-size: 28px;
}
 
label {
    margin-left: -126px;
    display: block;
    font-weight: lighter;
 
}
input{
    display: block;
    border-bottom: 2px solid #00BCD4;
    margin-top: 6px;
    margin-bottom: 10px;
    outline-style: none;
}
input[type="text"] {
    padding: 5px;
    width: 70%;
}

input#submit {
    padding: 7px;
    width: 50%;
    border-radius: 10px;
    border: none;
    position: absolute;
    bottom: 10px;
    cursor: pointer;
    background: linear-gradient(to right, #fc00ff, #00dbde);
}
input#submit:hover{
 
    background: linear-gradient(to right, #fc466b, #3f5efb); 
}
        </style>
    </head>
    <body>
        <form method="POST">
        <div class="to">
            <div class="form">
                <h2><?php echo $suser; ?></h2>
                <i class="fab fa-app-store-ios"></i>
                <label >Mật khẩu hiện tại:</label>
                <input type="password" name="txtpassht" placeholder="Nhập mật khẩu" style="padding: 5px; width: 70%">
                <label style="margin-left: -150px;">Mật khẩu mới:</label>
                <input type="password" name="txtnewpass" placeholder="Nhập mật khẩu mới" style="padding: 5px; width: 70%">     
                <label >Nhập lại mật khẩu:</label>
				<input type="password" name="txtrepass" placeholder="Nhập lại mật khẩu" style="padding: 5px; width: 70%">
				<input id="submit" type="submit" name="ok" value="xác nhận">
            </div>                
        </div>
        </form>

	<?php 
	include('connect.php');
	if(isset($_POST['ok']))
	{
		$passht=$_POST['txtpassht'];
		$newpass=$_POST['txtnewpass'];
		$repass=$_POST['txtrepass'];
		//gán biến trên form
	
		if($newpass==$repass)
			//ktra pass có trùng không
		{
			$sql="select *from dangnhap where name = '$suser' ";
			$run= mysqli_query($conn, $sql); 
			$row = mysqli_fetch_array($run);
			$passdata=$row['pass'];
			//lấy pass trong database
			if($passht == $passdata)
			{
				$sql_pass= "update dangnhap set pass = '$newpass' where name = '$suser'";
				$run_pass= mysqli_query($conn, $sql_pass); 
				if($run_pass) echo "<script>alert('Cập nhật thành công')</script>";
				header('location:about_me.php');
				
			}
			else echo "<script>alert('Không đổi được mật khẩu')</script>";
		}
		else echo "<script>alert('Mật khẩu mới và nhập lại không trùng nhau')</script>";

	}
	?>
<?php } ?>
</div>
</body>
</html>