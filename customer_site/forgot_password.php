<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>LOGIN</title>

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
            <div class="forms-grid">

                <!-- login -->
                <div class="login">
                    <span class="fas fa-key "></span>
                    <strong>Welcome!</strong>
                    <span>Forgot Password</span>

                    <form method="post" class="login-form">
                        <fieldset>
                            <div class="form">
                                <div class="form-row">
                                    <span class="fas fa-envelope"></span>
                                    <label class="form-label" for="input">Enter Yore Email</label>
                                    <input type="text" class="form-text" name="cust_email"
                                        id="custEmail">
                                    </br><span id="error"></span>
                                </div>

                                <div class="form-row button-login">
                                    <button class="btn btn-login" name="submit">Submit <span
                                            class="fas fa-arrow-right"></span></button>
                                </div>

                            </div>
                        </fieldset>
                    </form>
                </div>
                <!-- //login -->

            </div>



        </div>
    </section>


</body>

</html>