<?php

	include "sambungan/Jx4CtnGzNFhXfKff.php";
	include('sambungan/fungsi.php');

	session_start(); // Menciptakan session

	if(cek_login($koneksi) == 1) {
		header('location: home.html');
		exit();
	}

	else {

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			
			if(isset($_POST['username']) and isset($_POST['password'])){
				$username = $_POST['username'];
				$password = md5($_POST['password']);
				
				if(login($username, $password, $koneksi) == true){
					// Berhasil login
					header('location: home.html');
					exit();
				}

				else{
					// Gagal login
					header('location: errorlogin.html');
					exit();
				}
			
			}
		}

	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>LOGIN MEMBER</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="pengaturan/images/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="pengaturan/assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="pengaturan/assets/css/loginv1.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="pengaturan/assets/css/loginv1.animate.css">	
	<link rel="stylesheet" type="text/css" href="pengaturan/assets/css/loginv1.hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="pengaturan/assets/css/loginv1.select2.min.css">
	<link rel="stylesheet" type="text/css" href="pengaturan/assets/css/loginv1.util.css">
	<link rel="stylesheet" type="text/css" href="pengaturan/assets/css/loginv1.main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="pengaturan/images/img-01.png" alt="IMG">
				</div>

				<form autocomplete="off" method="post" name="login" id="form-login" action="" onSubmit="" class="login100-form validate-form">
					<span class="login100-form-title">
						USER LOGIN
					</span>
					<div class="wrap-input100">
						<input autocomplete="false" class="input100" type="text" name="username" placeholder="USERNAME" autocomplete="off">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input autocomplete="false" class="input100" type="password" name="password" placeholder="PASSWORD" autocomplete="off">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							LOGIN
						</button>
					</div>
					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password ?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>

			</div>
		</div>
	</div>	
	
	<script src="assets/js/loginv1.jquery-3.2.1.min.js"></script>
	<script src="assets/js/loginv1.popper.js"></script>
	<script src="assets/js/loginv1.bootstrap.min.js"></script>
	<script src="assets/js/loginv1.select2.min.js"></script>
	<script src="assets/js/loginv1.tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

</body>
</html>