<?php 
ob_start();
session_start();
include('connect.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Free Leoshop Website Template | Register :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
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
					<li class="active"><a href="login.php">Account</a></li> |
					<li><a href="checkout.php">Wishlist</a></li> |
					<li><a href="checkout.php">Checkout</a></li> |
					<li><a href="login.php">Log In</a></li> |
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
          <div class="register_account">
          	<div class="wrap">
    	      <h4 class="title">Create an Account</h4>
    		   <form method="POST">
    			 <div class="col_1_of_2 span_1_of_2">
		   			 <div><input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}"></div>
		    			<div><input type="text" name="Gender" value="Gender" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Gender';}"></div>
		    			<div><select id="Address" name="Address" onchange="change_country(this.value)" class="frm-field required">
		            <option>Address</option>
        <?php
        	$sql_option="select * from quequan";
			$run_option=mysqli_query($conn,$sql_option);
			while($row_option=mysqli_fetch_array($run_option))
			{
         ?>
         <option value="<?php echo $row_option['Address'];?>">
         <?php echo $row_option['Address']; ?>
         </option>
         <?php } ?>
		         </select></div>		        
		  
		    	 </div>
		    	  <div class="col_1_of_2 span_1_of_2">
		    	  <input type="text" name="Phone" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}">
		          		
		    		<div><input type="text" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"></div>
		          	<div><input type="text" name="Password" value="Mật khẩu" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mật khẩu';}"></div>
		          </div>
		      <button class="grey" type="Submit" name="ok">Submit</button>


			<?php
	include('connect.php');
	if(isset($_POST['ok']))
	{
		$Name=$_POST['Name'];
		$Gender=$_POST['Gender'];
		$Address=$_POST['Address'];
		$Phone=$_POST['Phone'];
		$Email=$_POST['Email'];
		$Password=$_POST['Password'];
 
		if(empty($Name)||empty($Phone)||empty($Email))
		echo "<script>alert('Bạn chưa nhập dữ liệu')</script>";
		else
		{  
             $sql_check="select * from dangnhap where name='$Email'";
            $run_check= mysqli_query ($conn, $sql_check);
           $row = mysqli_fetch_array($run_check);
            if($row['name'] == $Email) echo "<script>alert('Tài khoản đã tồn tại')</script>";
            else
            {
        
        		$sql="insert into dangky(Name, Gender, Address, Phone, Email, Password)
        		values('$Name','$Gender','$Address','$Phone','$Email','$Password')"; echo $sql;

                $sql_dn="insert into dangnhap(name, pass) values('$Email', '$Password')";
                $run_dn=mysqli_query($conn, $sql_dn);
        		$run=mysqli_query($conn, $sql);
                header('location: login.php');
                
        		if($run) echo "<script>alert('Thêm mới thành công')</script>";
        		else echo "<script>alert('Không thêm mới được')</script>";
             } 
		}
	}
	?>


		    <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p>
		    <div class="clear"></div>
		    </form>
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
					<li class="active"><a href="about.php">About Us</a></li> |
					<li><a href="delivery.php">Delivery & Returns</a></li> |
					<li><a href="delivery.php">Terms & Conditions</a></li> |
					<li><a href="contact.php">Contact Us</a></li> 
			    </ul>
			   </div>
				<div class="clear"></div>
		      </div>
			</div>
		</div>
</body>
</html>
<?php ob_end_flush(); ?>