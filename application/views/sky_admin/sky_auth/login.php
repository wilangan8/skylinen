<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/images/skylinenlogogaris.png') ?>">
    <link rel="icon" type="image/png" href="<?= base_url('assets/images/skylinenlogogaris.png') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Sky Linen - Login</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('sky_main/assets/css/login.css') ?>">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="<?= base_url('sky_main/assets/js/a81368914c.js') ?>"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="<?= base_url('sky_main/assets/img/login/wave.png') ?>">
	<div class="container">
		<div class="img">
			<img src="<?= base_url('sky_main/assets/img/login/bg_mobile.svg') ?>">
		</div>
		<div class="login-content">
			<form action="<?= base_url('sky-admin/login') ?>" method="post">
				<img src="<?= base_url('sky_main/assets/img/login/avatar_male.svg') ?>">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="username" class="input" autocomplete="off" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input" autocomplete="off" required>
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="<?= base_url('sky_main/assets/js/login.js') ?>"></script>
</body>
</html>
