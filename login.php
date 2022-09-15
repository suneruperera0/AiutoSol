<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Favicons -->
    <link rel="shortcut icon" sizes="16x16" href="assets/images/logo1.png"/>
    <meta charset="UTF-8">
    <title>Donation | Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/manual.css">
    <link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css">
    <!-- Google fonts Poppins -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Fontello -->
    <link rel="stylesheet" href="assets/css/css-fontello/animation.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/css-fontello/fontello.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/css-fontello/fontello-codes.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/css-fontello/fontello-embedded.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/css-fontello/fontello-ie7.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/css-fontello/fontello-ie7-codes.css" type="text/css"/>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="page">

    <!--=============================== Header ===========================-->
    <div id="header"></div>

    <!--=============================== Menu-Bar ========================-->
    <div id="menuBar-charity"></div>

    <!--=============================== Banner ==========================-->
    <div class="banner" style="background-image: url('assets/images/pexels-photo-69096.jpg');background-repeat: no-repeat;background-attachment: fixed;
  background-size: cover;">
        <div class="shadow-main">
            <h1> Login | Register </h1>
            <ul class="breadcrumb breadcrumb-news">
                <li><a href="index.html">HOME</a></li>
                <li><a href="login.html">LOGIN</a></li>
            </ul>
        </div>
    </div>

    <!--========================== Login | Register =======================-->
    <div class="main-contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 col-xs-12">

                    <div class="leave-reply">
                        <div class="form-login">
                            <h3>Login | Register </h3>
                            <form class="register-form form-all" action="{{ url_for('register') }}" method="POST">
                                <h4>Register:</h4>
                                
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Your name" name="nm" required/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="Your password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Your email address" name="email" required/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Your contact number" name="contact" pattern="[0-9]{10}" title="Must contain 10 characters from 0-9" required/>
                                </div>
                                <input type="submit" class="red-btn red-btn-form btn-login" value="Create">
                                <p class="message">Already registered? <a href="#">Sign In</a></p>
                            </form>
                            <form class="login-form form-all" action="{{ url_for('login') }}" method="POST">
                                <h4>Login:</h4>
                                <!-- Alert Boxes -->
                                {% if user_exists == 1 %}
                                    <div class="alert alert-danger" style="color: red;" role="alert">
                                    User Already Exists. Please Log In instead of Registering again
                                    </div>
                                {% elif user_exists == 0 %}
                                <div class="alert alert-success" style="color: green;" role="alert">
                                    Registered Successfully
                                    </div>
                                {% elif invalid == 1 %}
                                <div class="alert alert-danger" style="color: red;" role="alert">
                                    Invalid Login
                                    </div>
                                {% elif logged_out == 1 %}
                                <div class="alert alert-danger" style="color: red;" role="alert">
                                    You have been logged out. Please log in again
                                    </div>
                                {% endif %}

                                <!-- Login Form -->

                                <div class="form-group">
                                    <input class="form-control" type="text" name="email" placeholder="Email" required/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="password" placeholder="Password" required/>
                                </div>
                                <input type="submit" class="red-btn red-btn-form btn-login" value="Log In">
                                <p class="message">Not registered? <a href="#">Create an account</a></p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--=============================== Footer ===========================-->
    <div id="footer"></div>

</div><!--  /.page -->

<!-- JS code -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/myScript.js"></script>
<script>
    "use strict";
    $('.message a').click(function () {
        $('form.form-all').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
</script>

</body>
</html>

<?php
    include_once 'navigation.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

	<link rel="stylesheet" href="CSS/style.css">

</head>

<body>
	<div class="box-form">
		<div class="left">
			<div class="overlay">
				<h1>Let's Together feed the world!!</h1>
				<p>One step to end food insecurity.</p>
			</div>
		</div>


		<div class="right">
			<h5>LOGIN</h5>
			<form action="login.inc.php" method="post">
				<div class="input-boxes">
					<div class="inputs">
						<i class="fas fa-envelope"></i>
						<input type="text" name="uid" placeholder="Username/Email">
					</div>
					<div class="inputs">
						<i class="fas fa-lock"></i>
						<input type="password" name="pwd" placeholder="Password">
					</div>
	<?php
        if(isset($_GET["error"])) {
        if($_GET["error"] == "emptyinput") {
            echo "<div class='alert'><p>Must fill in all fields!</p></div>";
        }
        else if($_GET["error"] == "wronglogin") {
            echo "<div class='alertsucess'><p>Incorrect login!</p></div>";
        }
        } 
   ?>
					<div class="btn">
						<button type="submit" name="submit">Login</button>
					</div>
					<br><br>
					<div class="text sign-up-text">Don't have an account? <a href="signup.php"> Sigup now</a></div>
				</div>
			</form>
		</div>
	</div>
	
</body>

</html>
<?php
    include_once 'footer.php';
?>
