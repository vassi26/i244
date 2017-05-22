<!DOCTYPE html>
	<head>
			<meta charset="UTF-8">
			<meta name="description" content="Day Of The Year 1/12/2017">
			<meta name="keywords" content="HTML,CSS,XML,JavaScript">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
			<link rel="stylesheet" type="text/css" href="../assets/css/registration.css">
			<title>Registration</title>
	</head>
	<body>
		<div class="form">
			<ul class="tab-group">
				<li class="tab active"><a href="#register">Sign Up</a></li>
				<li class="tab"><a href="#login">Log In</a></li>
			</ul>
			 <div class="tab-content">
				<div id="register">
					<h1>Create new account</h1>
					<form id="registration" action="create_user.php" method="post">
						<div class="field-wrap">
							<label>Username</label>
							<input type="text" name="Username">
						</div>
						<div class="field-wrap">
							<label>Email</label>
							<input type="email" name="Email">
						</div>
						<div class="field-wrap">
							<label>Password</label>
							<input type="password" name="Password">
						</div>
						<div class="field-wrap">
							<label>Referral code</label>
							<input type="number" name="Code">
						</div>
						<button id="register-button" type="submit" class="button button-block">Create</button>
					</form>
				</div>
				<div id="login" style="display: none;">
					<h1>Welcome Back!</h1>
					<form id="log-in" action="login.php" method="post">
						<div class="field-wrap">
							<label>Username</label>
							<input type="text" name="Username">
						</div>
						<div class="field-wrap">
							<label>Password</label>
							<input type="password" name="Password">
						</div>
						<p class="forgot"><a href="#">Forgot Password?</a></p>
						<button id="login-button" type="submit" class="button button-block">Log In</button>
					</form>
				</div>
			</div>
		</div>
			<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
			<script src="../assets/js/registration.js"></script>
			<script src="../assets/js/input.js"></script>
	</body>
</html>
