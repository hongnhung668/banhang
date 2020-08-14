<?php include('connect.php');?>
<?php session_start();
$session=$_SESSION['user'];
if(empty($session)) echo header('location:login.php');
else
{
  $suser=$_SESSION['user'];
 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Leoshop</title>
<style>
    .cach{ padding-top:100px; float:left}
	 .text{  font-family:Tahoma, Geneva, sans-serif;}
	 .text4{width:500px; height:550px; margin:auto;}
.text1{width:150px; float:left; margin:10px 10px; margin-left:40px}
.text2{width:200px;margin:10px 10px; float:left;}
.text3{ margin-left:110px; text-decoration:underline}
.thoat{ margin:3px 0px 0px 37px; text-decoration:underline}
.submit{ background-color:# FFF; width:150px; height:30px; font-family:"courier new"; monospace; 
		margin: 20px; text-align: center; border-radius:5px; border-color:#FFF}
 a {text-decoration: none; } 
</style>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!--start slider -->
    <link rel="stylesheet" href="css/fwslider.css" media="all">
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/css3-mediaqueries.js"></script>
    <script src="js/fwslider.js"></script>
<!--end slider -->
<script src="js/jquery.easydropdown.js"></script>
</head>
<body>
     <div class="header-top">
         <div class="wrap"> 
			  <div class="header-top-left">
			  	   <div class="box">
   				      <select tabindex="4" class="dropdown">
							<option value="" class="label" value="">Language :</option>
							<option value="1">English</option>
							<option value="2">Vietnamese</option>
							<option value="3">German</option>
					  </select>
   				    </div>
   				    <div class="box1">
   				        <select tabindex="4" class="dropdown">
							<option value="" class="label" value="">Currency :</option>
							<option value="1">$ Dollar</option>
                            <option value="1">₫ VND</option>
							<option value="2">€ Euro</option>
						</select>
   				    </div>
   				    <div class="clear"></div>
   			 </div>
			 <div class="cssmenu">
				<ul>
					<li class="active"><a href="list.php"><?php echo $suser; ?></a></li> |
					<li><a href="index.php">Log out</a></li> |
					<li><a href="register.php">Sign Up</a></li>
				</ul>
			</div>
			<div class="clear"></div>
 		</div>
	</div>
	<div class="header-bottom">
	    <div class="wrap">
			<div class="header-bottom-left">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt=""/></a>
				</div>
				<div class="menu">
	            <ul class="megamenu skyblue">
			<li class="active grid"><a href="list.php">Quản lí user</a></li>
			<li><a href="sp.php">Quản lí sản phẩm</a>
				<li><a href="insertqq.php">Quản lí quê quán</a>
			</ul>
			</div>
		</div>
	   <div class="header-bottom-right">
         
    </div>
     <div class="clear"></div>
     </div>
	</div>
  
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div>
   <div class="text4">
	<form method="POST" enctype="multipart/form-data">
		<?php include('connect.php'); ?>
		<div class="text1">Name Product</div>
		<div class="text2"><input type="text" name="txtten"></div>
		<div class="text1">Code Product</div>
		<div class="text2"><input type="text" name="txtcode"></div>
        <div class="text1">Category</div>
		<div class="text2"><input type="text" name="txtlh"></div>
		<div class="text1">Money</div>
		<div class="text2"><input type="text" name="txtmoney"></div>
		<div class="text1">Description</div>
		<div class="text2"><textarea cols="20" name="txtdc"></textarea></div>
		<div class="text1">Picture</div>
		<div class="text2"><input type="file" name="txtfile" value="chọn tệp"></div>
		<div ><input type="submit" name="ok" value="add product" class="submit">
		<a href="sp.php" class="text3"><I>Exit</I></a></div>
			
			<?php
	include('connect.php');
	if(isset($_POST['ok']))
	{
		$ten=$_POST['txtten'];
		$code=$_POST['txtcode'];
		$category=$_POST['txtlh'];
		$money=$_POST['txtmoney'];
		$description=$_POST['txtdc'];
		$tmp=$_FILES['txtfile']['tmp_name'];
		$name=$_FILES['txtfile']['name'];
		$upload=move_uploaded_file($tmp, 'img/'.$name);
  
		if(empty($ten)||empty($code)||empty($money))
		echo "Bạn chưa nhập dữ liệu";
		else
		{  
			$sql="insert into themmoi(Name, Code, Category, Money, Description, Picture)
        		values('$ten','$code','$category','$money','$description','$name')";
			$run=mysqli_query($conn, $sql);
        	if($run) echo "Thêm mới thành công";
        	else echo "Không thêm mới được";
            
		}
	}
	?>
	</form>
    </div>
    <div>
    <div class="cach">
   <div class="footer">
		<div class="footer-top">
			<div class="wrap">
			  <div class="section group example">
				<div class="col_1_of_2 span_1_of_2">
					<ul class="f-list">
					  <li><img src="images/2.png"><span class="f-text">Free Shipping on orders over $ 100</span><div class="clear"></div></li>
					</ul>
				</div>
				<div class="col_1_of_2 span_1_of_2">
					<ul class="f-list">
					  <li><img src="images/3.png"><span class="f-text">Call us! toll free-666-888-9999</span>
					    <div class="clear"></div></li>
					</ul>
				</div>
				<div class="clear"></div>
		      </div>
			</div>
		</div>
		<div class="footer-middle">
			<div class="wrap">
			 <!--<div class="section group">
			  	<div class="f_10">
					<div class="col_1_of_4 span_1_of_4">
						<h3>Facebook</h3>
						<script>(function(d, s, id) {
						  var js, fjs = d.getElementsByTagName(s)[0];
						  if (d.getElementById(id)) return;
						  js = d.createElement(s); js.id = id;
						  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
						  fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
						<div class="like_box">	
							<div class="fb-like-box" data-href="http://www.facebook.com/w3layouts" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
						</div>
					</div>
					<div class="col_1_of_4 span_1_of_4">
						<h3>From Twitter</h3>
						<div class="recent-tweet">
							<div class="recent-tweet-icon">
								<span> </span>
							</div>
							<div class="recent-tweet-info">
								<p>Ds which don't look even slightly believable. If you are <a href="#">going to use nibh euismod</a> tincidunt ut laoreet adipisicing</p>
							</div>
							<div class="clear"> </div>
						</div>
						<div class="recent-tweet">
							<div class="recent-tweet-icon">
								<span> </span>
							</div>
							<div class="recent-tweet-info">
								<p>Ds which don't look even slightly believable. If you are <a href="#">going to use nibh euismod</a> tincidunt ut laoreet adipisicing</p>
							</div>
							<div class="clear"> </div>
						</div>
					</div>
				</div>
				<div class="f_10">
					<div class="col_1_of_4 span_1_of_4">
					    <h3>Information</h3>
						<ul class="f-list1">
						    <li><a href="#">Duis autem vel eum iriure </a></li>
				            <li><a href="#">anteposuerit litterarum formas </a></li>
				            <li><a href="#">Tduis dolore te feugait nulla</a></li>
				             <li><a href="#">Duis autem vel eum iriure </a></li>
				            <li><a href="#">anteposuerit litterarum formas </a></li>
				            <li><a href="#">Tduis dolore te feugait nulla</a></li>
			         	</ul>
					</div>
					<div class="col_1_of_4 span_1_of_4">
						<h3>Contact us</h3>
						<div class="company_address">
					                <p>500 Lorem Ipsum Dolor Sit,</p>
							   		<p>22-56-2-9 Sit Amet, Lorem,</p>
							   		<p>USA</p>
					   		<p>Phone:(00) 666 888 9999</p>
					   		<p>Fax: (000) 000 00 00 0</p>
					 	 	<p>Email: <span>mail[at]NTPQVLshop.com</span></p>
					   		
					   </div>
					   <div class="social-media">
						     <ul>
						        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="Google"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Linked in"><a href="#" target="_blank"> </a> </span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Rss"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Facebook"><a href="#" target="_blank"> </a></span></li>
						    </ul>
					   </div>
					</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		  </div>-->
		   
		   
		   		   		   
		   <div class="section group example">
			  <div class="col_1_of_f_1 span_1_of_f_1">
				 <div class="section group example">
				   <div class="col_1_of_f_2 span_1_of_f_2">
				      <h3>Facebook</h3>
						<script>(function(d, s, id) {
						  var js, fjs = d.getElementsByTagName(s)[0];
						  if (d.getElementById(id)) return;
						  js = d.createElement(s); js.id = id;
						  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
						  fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
						<div class="like_box">	
							<div class="fb-like-box" data-href="http://www.facebook.com/w3layouts" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
						</div>
 				  </div>
				  <div class="col_1_of_f_2 span_1_of_f_2">
						<h3>From Twitter</h3>
				       <div class="recent-tweet">
							<div class="recent-tweet-icon">
								<span> </span>
							</div>
							<div class="recent-tweet-info">
								<p>Ds which don't look even slightly believable. If you are <a href="#">going to use nibh euismod</a> tincidunt ut laoreet adipisicing</p>
							</div>
							<div class="clear"> </div>
					   </div>
					   <div class="recent-tweet">
							<div class="recent-tweet-icon">
								<span> </span>
							</div>
							<div class="recent-tweet-info">
								<p>Ds which don't look even slightly believable. If you are <a href="#">going to use nibh euismod</a> tincidunt ut laoreet adipisicing</p>
							</div>
							<div class="clear"> </div>
					  </div>
				</div>
				<div class="clear"></div>
		      </div>
 			 </div>
			 <div class="col_1_of_f_1 span_1_of_f_1">
			   <div class="section group example">
				 <div class="col_1_of_f_2 span_1_of_f_2">
				    <h3>Information</h3>
						<ul class="f-list1">
						    <li><a href="#">Duis autem vel eum iriure </a></li>
				            <li><a href="#">anteposuerit litterarum formas </a></li>
				            <li><a href="#">Tduis dolore te feugait nulla</a></li>
				             <li><a href="#">Duis autem vel eum iriure </a></li>
				            <li><a href="#">anteposuerit litterarum formas </a></li>
				            <li><a href="#">Tduis dolore te feugait nulla</a></li>
			         	</ul>
 				 </div>
				 <div class="col_1_of_f_2 span_1_of_f_2">
				   <h3>Contact us</h3>
						<div class="company_address">
					                <p>500 Lorem Ipsum Dolor Sit,</p>
							   		<p>22-56-2-9 Sit Amet, Lorem,</p>
							   		<p>USA</p>
					   		<p>Phone:(00) 222 555 6666</p>
					   		<p>Fax: (000) 000 00 00 0</p>
					 	 	<p>Email: <span>mail[at]leoshop.com</span></p>
					   		
					   </div>
					   <div class="social-media">
						     <ul>
						        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="Google"><a href="https://www.google.com.vn/" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Linked in"><a href="#" target="_blank"> </a> </span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Rss"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Facebook"><a href="https://www.facebook.com/" target="_blank"> </a></span></li>
						    </ul>
					   </div>
				</div>
				<div class="clear"></div>
		    </div>
		   </div>
		  <div class="clear"></div>
		    </div>
		  </div>
		</div>
		<div class="footer-bottom">
			<div class="wrap">
	             <div class="copy">
			        <p>© 2014 Template by <a href="http://w3layouts.com" target="_blank">w3layouts</a></p>
		         </div>
				<div class="f-list2">
				 <ul>
					<li class="active"><a href="about.html">About Us</a></li> |
					<li><a href="delivery.html">Delivery & Returns</a></li> |
					<li><a href="delivery.html">Terms & Conditions</a></li> |
					<li><a href="contact.html">Contact Us</a></li> 
				 </ul>
			    </div>
			    <div class="clear"></div>
		      </div>
	     </div>
	</div>
    </div>
    </div>
</body>
</html>
<?php } ?>