<?php
include "connexion.php";
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
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
		<div class="container-login100" style="background-image: url('images/b-1.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account sign up
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="" methode="GET">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<input type="submit" name="sub" value="sign up" class="login100-form-btn">
					</div>


                    <?php 
                    
                    if(isset($_GET["sub"])){
                        $user=$_GET["username"];
                        $pass=$_GET["pass"];
                        $sql="select * from user where username='$user'";
                        $a=mysqli_query($conn,$sql);
                        $ro=mysqli_fetch_assoc($a);
                        if(!empty($ro)){
                            echo "username already selected";
                        }
                        else{
												
 $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
 $passs = array(); 
 $combLen = strlen($comb) - 1; 

	for ($i = 0; $i < 8; $i++) {
		$n = rand(0, $combLen);
		$passs[] = $comb[$n];
	}
	$vpass=implode($passs); 

	$sql1="select * from user where viewpass='$vpass'";
	$a1=mysqli_query($conn,$sql1);
	$ro1=mysqli_fetch_assoc($a1);

	while(!empty($ro1)){
		$comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
 $passs = array(); 
 $combLen = strlen($comb) - 1; 

	for ($i = 0; $i < 8; $i++) {
		$n = rand(0, $combLen);
		$passs[] = $comb[$n];
	}
	$vpass=implode($passs); 

	$sql1="select * from user where viewpass='$vpass'";
	$a1=mysqli_query($conn,$sql1);
	$ro1=mysqli_fetch_assoc($a1);
	}

                            $sql1="insert into user(username,mdp,viewpass) values ('$user','$pass','$vpass')";
                            $b=mysqli_query($conn,$sql1);
                            if($b){
                                $_SESSION["name"]=$user;
                                $_SESSION["pass"]=$pass;
								$_SESSION["vpass"]=$vpass;
                                $sql3="select * from user where username='$user";
                        $a1=mysqli_query($conn,$sq3);
                        $ro1=mysqli_fetch_assoc($a1);
                        $idu=$ro1["idu"];
                        $_SESSION["idu"]=$idu;
                        header("location:../album/albums.php");
                            }
                        }
                    }
                    
                    ?>

                
				</form>
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