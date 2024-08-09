<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>SignUp</title>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="css/style1.css" type="text/css" media="all" />
	
    <!-- fontawesome v5 -->
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>

<body>
	
    <section class="forms">
	
        <div class="container">
            <!-- logo --
            <div class="logo">
                <a class="brand-logo" href="index.html">Hotel Booking System signup forms</a>
            </div>
            <!-- //logo -->
            <div class="forms-grid">

                <!-- register -->
                <div class="register">
                    <span class="fas fa-user-circle"></span>
					 <strong>Welcome!</strong>
                    <strong>Create account!</strong>
                    <form  method="post" class="register-form">
                        <fieldset>
                            <div class="form">
                                <div class="form-row">
                                    <span class="fas fa-user"></span>
                                    <label class="form-label" for="input" >Name</label>
                                    <input type="text" class="form-text" name="cust_name" required>
                                </div>
                                <div class="form-row">
                                    <span class="fas fa-envelope"></span>
                                    <label class="form-label" for="input">E-mail</label>
                                    <input type="email" class="form-text"name="cust_email" required>
                                </div>
								<div class="form-row">
                                    <span class="fas fa-phone-volume"></span>
                                    <label class="form-label" for="input">Mobile - Number</label>
                                    <input type="text" class="form-text" name="cust_mob" required>
                                </div>
								<div class="form-row">
                                    <span class="fas fa-address-book"></span>
                                    <label class="form-label" for="input">Address</label>
                                    <textarea class="form-text" name="cust_add" required></textarea>
                                </div>
                                <div class="form-row">
                                    <span class="fas fa-lock"></span>
                                    <label class="form-label" for="input">Password</label>
                                    <input type="password" class="form-text" name="cust_password" required>
                                </div>
								<div class="form-row">
                                    <span class="fas fa-lock"></span>
                                    <label class="form-label" for="input">Confirm Password</label>
                                    <input type="password" class="form-text" name="confirm_password" required>
                                </div>
                                <div class="form-row button-login">
                                    <button class="btn btn-login" name="submit">Create <span class="fas fa-arrow-right"></span></button>
                                </div>
	
							  <div class="form-row bottom">                                   
									<a href="" class="forgot"></a> <!--Only Right side space -->
                                   <a href="login" class="forgot">Login hear....</a>
                                </div>
                            </div>
                        </fieldset>
                        </form>

                       
                    </div>
                <!-- //register -->
            </div>

        </div>
    </section>

</body>

</html>