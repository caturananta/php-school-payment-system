<!DOCTYPE html>
<html lang="en">
<head>
	<title>LOGIN SISFO</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="<?php echo base_url('assets/images/favicon.png')?>"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/iconic/css/material-design-iconic-font.min.css')?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animate/animate.css')?>">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css')?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animsition/css/animsition.min.css')?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/select2/select2.min.css')?>">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/daterangepicker/daterangepicker.css')?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/util.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css')?>">
<!--===============================================================================================-->
</head>
<body>
<?php echo form_open('home/proses_login'); ?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-26" >
						welcome
					</span>

					<span class="login100-form-title p-b-48">
					<i class="zmdi zmdi-odnoklassniki"></i>
					</span>
				
					<div class="wrap-input100 validate-input" data-validate = "">
						<input class="input100" type="text" name="nama_admin" required>
						<span class="focus-input100" data-placeholder="username"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password" required>
						<span class="focus-input100" data-placeholder="Password"</span>
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login		

							</button>
						</div>
					</div></br>
					<center><?php if (isset($pesan)){
						echo $pesan;
					}?></center>
					<?php echo form_close(); ?>
					<div class="text-center p-t-115">
						<span class="txt1">
							
						</span>

						<a class="txt2" href="#">
							
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/animsition/js/animsition.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/bootstrap/js/popper.js')?>"></script>
	<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/select2/select2.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/daterangepicker/moment.min.js')?>"></script>
	<script src="<?php echo base_url('assets/vendor/daterangepicker/daterangepicker.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/countdowntime/countdowntime.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/js/main.js')?>"></script>

</body>
</html>