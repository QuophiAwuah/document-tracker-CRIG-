<?php session_start(); ?>

<?php
  if(isset($_SESSION['breed_username']) && isset($_SESSION['breed_password'])){
     header('Location: index.php');
  }
 ?>
 <?php $msg="";?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

<style media="screen">
	body{
		overflow: auto;
	}
	.msg{
		color: red;
		font-size: 20px;
	}
</style>
</head>


<body>
<?php
 $user ="breed";
 $pass ="breed1234";
if(isset($_POST['submit'])){
     $username = $_POST['username'];
     $passwd = $_POST['password'];

    if($username == $user  && $passwd == $pass){
      $_SESSION['breed_password'] =$passwd;
      $_SESSION['breed_username'] =$username;
      if(isset($_SESSION['breed_username']) || isset($_SESSION['breed_password'])){
        header('Location: index.php');
      }
     }else
     {
       $msg= "<p class ='msg text-center'>Invalid Credential Entered !!</p>";
     }

   }

 ?>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/CRIG_background.jpg');">
			<div class="wrap-login100">
				<h2 class="text-center">Plant Breeding</h2><hr>
				<form class="login100-form validate-form" method="post" action="login.php">
         <!-- <img src="images/track.png" class="logo" class="img-responsive img-circle" width="100%" height="100%" alt=""> -->
          <?php echo $msg; ?>
					<span class="login100-form-title p-b-34 p-t-27">Log in</span>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
            <input type="submit" name="submit" value="login" class="form-control btn btn-success">
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							<!-- Forgot Password? -->
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>
</body>
</html>

