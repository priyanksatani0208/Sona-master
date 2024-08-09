<?php

if(isset($_SESSION['email']))
{
	
}
else	
{
	echo "<script>alert('login first');
		window.location='home';
		<script>";
}

?>
<!DOCTYPE html>
<html>
<head>
<title> Profile </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Regular Weather Report template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href="css/profile.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="main">
		<div class="agile_main_grid">
			<div class="agile_main_grid_left">
				<div class="agile_main_grid_left1">
					<h2>My Profile</h2>
				</div>
				
			</div>
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="agile_main_grid_left_grid">
								<div class="agile_main_grid_left2">
									<img src="images/profile1.jpg" alt=" " width="90px" height="90px" />
									
								
									<h3><?php echo $fetch->cust_name;?></h3>
									<div class="agile_main_grid_left2_grid">
										<div class="agile_main_grid_left2_grid_left">
											<h6>Address : </h6>
											<h6><?php echo $fetch->cust_add;?></h6>
											
										</div>
										
										<div class="agile_main_grid_left2_grid_left">
											<h6>Contact No :</h6>
											<h6><?php echo $fetch->cust_mob;?></h6>
										</div>
										<div class="agile_main_grid_left2_grid_left">
											<h6>Email : </h6>
											<h6><?php echo $fetch->cust_email;?></h6>
										</div>
										<div class="clear"> </div>
									</div>
									<div class="agile_main_grid_left2_grid_bottom">
										<a href="editmyprofile?edit_cust_id=<?php echo $fetch->cust_id;?>">Edit</a> <br>
										<a href="change_password?edit_cust_id=<?php echo $fetch->cust_id;?>">Change Password</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
		</div>
		
	</div>
</body>
</html>