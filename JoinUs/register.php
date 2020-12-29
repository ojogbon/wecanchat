
<?php include "../controllers/Central.php";
include "../controllers/Member.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Wecanchat</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
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
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Client  Registration
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="post">

                <div class="wrap-input100 validate-input" data-validate = "Enter Firstname">
						<input class="input100" type="text"  placeholder="First name eg: matinx" name="firstname_init">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
                 </div>

                 <div class="wrap-input100 validate-input" data-validate = "Enter Lastname">
						<input class="input100" type="text"  placeholder="Last name eg: tunde" name="lastname_init">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
                 </div>
                    
					<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="text"  placeholder="Email eg: example@gmail.com" name="email_init">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

                    <hr>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass_init" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate="Enter confirm password">
						<input class="input100" type="password" name="conpass_init" placeholder="Confirm Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button name="login_in" type="submit" class="login100-form-btn">
							Register
                        </button>
                        <br>

						<?php 
						
							if(isset($_POST["login_in"])){
                                $firstname = $_POST["firstname_init"];
                                $lastname = $_POST["lastname_init"];
									$email = $_POST["email_init"];
                                    $password = $_POST["pass_init"];
                                    $conpass = $_POST["conpass_init"];

									$key = "1234567opiuyt";
									insertMember($member,$key, $firstname, $lastname,$email,$password,$conpass);
							}
						
						?>
					</div>

                </form>
                <a href="./index.php" style="    padding-left: 15%;">Already a member a member? Login Instead</a>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
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