<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			
				<div class="login100 -form-title" >
					
					<h3><u>CHANGE PASSWORD</u></h3>
				
				</div>
				

				<form class="login100-form validate-form" method="post">

				<input type="hidden" class="input100"  name="cust_id"   value="<?php echo $_SESSION['cust_id']?>">
					     	
			
					<!-- <div class="wrap-input100 validate-input m-b-26" data-validate="Old Password is required">
						<span class="label-input100">Old Password</span>
						<input type="password" class="input100"  name="password" placeholder="Enter Old Password"  value="">
						<span class="focus-input100"></span>
					</div> -->
					
					<div class="wrap-input100 validate-input m-b-26" data-validate="New Password is required">
						<span class="label-input100">New Password</span>
						<input type="password" class="input100"  name="cust_password" placeholder="Enter New Password" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-26" data-validate="Confirm Password is required">
						<span class="label-input100">Confirm Password</span>
						<input type="password" class="input100"  name="Confirm_Password" placeholder="Enter Confirm Password" value="">
						<span class="focus-input100"></span>
					</div>               
					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit">
							Change Password
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>