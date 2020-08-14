<?php include('connect.php');
 session_start();
$session=$_SESSION['user'];
if(empty($session)) echo header('location:login.php');
else
{
  $suser=$_SESSION['user'];
 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Free Leoshop Website Template | Checkout :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/mine.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet">
	<script src="js/myscript.js"></script>
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- dropdown -->
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
							<option value="2">French</option>
							<option value="3">German</option>
					  </select>
   				    </div>
   				    <div class="box1">
   				        <select tabindex="4" class="dropdown">
							<option value="" class="label" value="">Currency :</option>
							<option value="1">$ Dollar</option>
							<option value="2">€ Euro</option>
						</select>
   				    </div>
   				    <div class="clear"></div>
   			 </div>
			 <div class="cssmenu">
				<ul>
					<li class="active"><a href="about_me.php"><?php echo $suser; ?></a></li> |
					<li><a href="checkout.php">Wishlist</a></li> |
					<li><a href="checkout.php">Checkout</a></li> |
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
				<div class="row">
	            <ul class="megamenu skyblue">
			<li class="active grid"><a href="index.php">Home</a></li>
			<li><a class="color4" href="#">women</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Contact Lenses</h4>
								<ul>
									<li><a href="womens.php">Daily-wear soft lenses</a></li>
									<li><a href="womens.php">Extended-wear</a></li>
									<li><a href="womens.php">Lorem ipsum </a></li>
									<li><a href="womens.php">Planned replacement</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Sun Glasses</h4>
								<ul>
									<li><a href="womens.php">Heart-Shaped</a></li>
									<li><a href="womens.php">Square-Shaped</a></li>
									<li><a href="womens.php">Round-Shaped</a></li>
									<li><a href="womens.php">Oval-Shaped</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Eye Glasses</h4>
								<ul>
									<li><a href="womens.php">Anti Reflective</a></li>
									<li><a href="womens.php">Aspheric</a></li>
									<li><a href="womens.php">Bifocal</a></li>
									<li><a href="womens.php">Hi-index</a></li>
									<li><a href="womens.php">Progressive</a></li>
								</ul>	
							</div>												
						</div>
					  </div>
					</div>
				</li>				
				<li><a class="color5" href="#">Men</a>
				<div class="megapanel">
					<div class="col1">
							<div class="h_nav">
								<h4>Contact Lenses</h4>
								<ul>
									<li><a href="mens.php">Daily-wear soft lenses</a></li>
									<li><a href="mens.php">Extended-wear</a></li>
									<li><a href="mens.php">Lorem ipsum </a></li>
									<li><a href="mens.php">Planned replacement</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Sun Glasses</h4>
								<ul>
									<li><a href="mens.php">Heart-Shaped</a></li>
									<li><a href="mens.php">Square-Shaped</a></li>
									<li><a href="mens.php">Round-Shaped</a></li>
									<li><a href="mens.php">Oval-Shaped</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Eye Glasses</h4>
								<ul>
									<li><a href="mens.php">Anti Reflective</a></li>
									<li><a href="mens.php">Aspheric</a></li>
									<li><a href="mens.php">Bifocal</a></li>
									<li><a href="mens.php">Hi-index</a></li>
									<li><a href="mens.php">Progressive</a></li>
								</ul>	
							</div>												
						</div>
					</div>
				</li>
				<li><a class="color6" href="other.php">Other</a></li>
				<li><a class="color7" href="other.php">Purchase</a></li>
			</ul>
			</div>
		</div>
	   <div class="header-bottom-right">
         <div class="search">	  
				<input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
				<input type="submit" value="Subscribe" id="submit" name="submit">
				<div id="response"> </div>
		 </div>
	  <div class="tag-list">
	    <ul class="icon1 sub-icon1 profile_img">
			<li><a class="active-icon c1" href="#"> </a>
				<ul class="sub-icon1 list">
					<li><h3>sed diam nonummy</h3><a href=""></a></li>
					<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
				</ul>
			</li>
		</ul>
		<ul class="icon1 sub-icon1 profile_img">
			<li><a class="active-icon c2" href="cartbt.php"> </a>
				<ul class="sub-icon1 list">
					<li><h3>
					<?php 
$ok=1;
if(isset($_SESSION['giohang']))
{
	foreach($_SESSION['giohang'] as $k => $v) 
	{
	if(isset($k))
		{$ok=2;}
	}
}
if($ok != 2)
{
	echo '<p>No product</p>';
}
else
{
	$item = $_SESSION['giohang'];
	echo '<p>Bạn đang có <a href = "cartbt.php">' .count($item). ' PRODUCT</a></p>';
}
?>
				</h3></li>
					<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
				</ul>
			</li>
		</ul>
	    <ul class="last"><li><a href="cartbt.php">Cart(<?php 
$ok=1;
if(isset($_SESSION['giohang']))
{
	foreach($_SESSION['giohang'] as $k => $v) 
	{
	if(isset($k))
		{$ok=2;}
	}
}
if($ok != 2)
{
	echo '0';
}
else
{
	$item = $_SESSION['giohang'];
	echo count($item);
}
?>)</a></li></ul>
	  </div>
    </div>
     <div class="clear"></div>
     </div>
	</div>
         <div class= "container">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h1 class="py-3">About <span>Me</span></h1>
				</div>
			</div>
		</div>

	<div class="container" style="margin-top: 20px;">
		<div class="row">
			<div class="col-11 mx-auto profile">
				<div class="py-3 px-2 px-lg-4 py-lg-5">
					<?php
					 $sql_select="select * from dangky where email='$session'";
						$run_select=mysqli_query($conn, $sql_select);
						$row_select=mysqli_fetch_array($run_select);
						$name=$row_select['ID'];
					?>
					<div class="row">
						<div class="avatarBox col-12 col-lg-5">
							<img src="img/<?php echo $row_select['img'];?>" height="200px" class="img-fluid">
						</div>
						

						<div class="infoBox col-12 col-lg-6 mt-2 mt-lg-0">
							<p class="sayHi">Hello</p>

							<div class="name">
								<p><span>I'm</span> <?php echo $row_select['Name'];?></p>
								<p class="s">Verified
									<span class="ion-ios-checkmark-outline"></span>
								</p>
							</div>
							<div class="detailInfo">
								<div class="row my-2">
									<div class="col-lg-4 col-12 boldd">Tên</div>
									<div class="col-lg-8 col-12 b"><?php echo $row_select['Name'];?></div>
								</div>
								<div class="row my-2">
									<div class="col-lg-4 col-12 boldd">Giới Tính</div>
									<div class="col-lg-8 col-12 b"><?php echo $row_select['Gender'];?></div>
								</div>
								<div class="row my-2">
									<div class="col-lg-4 col-12 boldd">Địa chỉ</div>
									<div class="col-lg-8 col-12 b"><?php echo $row_select['Address'];?></div>
								</div>
								<div class="row">
									<div class="col-lg-4 col-12 boldd">Email</div>
									<div class="col-lg-8 col-12 b"><?php echo $row_select['Email'];?></div>
								</div>
								<div class="row">
									<div class="col-lg-4 col-12 boldd">Số điện thoại</div>
									<div class="col-lg-8 col-12 b"><?php echo $row_select['Phone'];?></div>
								</div>

							</div>
							
						</div>
							<div class="avatarBox col-sm-2 col-10 col-lg-4 mt-2 mt-lg-0">
							<?php echo "<a href='update_img.php?im=$name'>Cập nhật ảnh</a>"; ?>
							</div>
							<div class="avatarBox col-sm-2 col-12 col-lg-4 mt-2 mt-lg-0">
							<?php echo "<a href='changepass.php?im=$name'>Đổi mật khẩu</a>"; ?>
							</div>
					</div>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>
    	</div>
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
					  <li><img src="images/3.png"><span class="f-text">Call us! toll free-222-555-6666 </span><div class="clear"></div></li>
					</ul>
				</div>
				<div class="clear"></div>
		      </div>
			</div>
		</div>
		<div class="footer-middle">
			<div class="wrap">
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
					   		<p>Phone:(00) 222 666 444</p>
					   		<p>Fax: (000) 000 00 00 0</p>
					 	 	<p>Email: <span>mail[at]leoshop.com</span></p>
					   		
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
</body>
</html>
