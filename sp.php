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
<style>
.textsp{ font-family:Tahoma, Geneva, sans-serif; font-size:15px;}
.text{ margin-left:1000px; font-size:18px}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
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
         <div class= "container">
           	<div class="avatarBox  col-sm-2 col-10 col-lg-11 mt-2 mt-lg-0 text">
	<a href="form.php">Thêm mới</a>&nbsp;
    <a href="index.php">Exit</a>
	</div>
		<div class="avatarBox col-sm-2 col-10 col-lg-1 mt-2 mt-lg-0 ">
	</div>
    <div class="textsp">
	<div class="container">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Picture</th>
						<th>Name Product</th>
						<th>Code Product</th>
						<th>Category</th>
						<th>Money</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th>Remove</th>
					</tr>
				</thead>
		<?php
		    include('connect.php');
			$sql= "select * from  themmoi";
			$run=mysqli_query($conn, $sql);
			while($row=mysqli_fetch_array($run))
			{
		?>
		<div>
				
				<tr>
					<th><img src="img/<?php echo $row['Picture'] ?>" width="90px" height="120px" 
				style="border-radius: 30px"></th>
					<th> <?php echo $row['Name']; ?></th>
					<th><?php echo $row['Code']; ?></th>
					<th><?php echo $row['Category']; ?></th>
					<th><?php echo $row['Money']; ?></th>
                    <th><?php echo $row['Description']; ?></th>
                    <th><a href="edit2.php?sua=<?php echo $row['Code']; ?>">Edit</a></th>
                    <th><a href="delete2.php?xoa=<?php echo $row['Code']; ?>">Remove</a></th>
				</tr>
			
		</div><?php }?>
		</table>
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
<?php } ?>