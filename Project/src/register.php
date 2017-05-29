<!DOCTYPE html>
	<head>
			<meta charset="UTF-8">
			<meta name="description" content="Registration">
			<meta name="keywords" content="HTML,CSS,XML,JavaScript">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
			<link rel="stylesheet" type="text/css" href="../assets/css/registration.css">
			<script src="../assets/js/toggle.js"></script>
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
							<input type="text" name="Username" class="required">
						</div>
						<div class="field-wrap">
							<label>Email</label>
							<input type="email" name="Email" class="required">
						</div>
						<div class="field-wrap">
							<label>Password</label>
							<input type="password" name="Password" class="required" id="passwordReg">
							<button type="button" id="showReg" style="background:url(../assets/img/locked.png)no-repeat;cursor:pointer;border:none;background-size:20px;" onclick="toggleVisible(this, document.getElementById('passwordReg'))"></button>
						</div>
						<div class="field-wrap">
							<label>Referral code</label>
							<input type="text" name="Code">
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
							<input type="password" id="passwordLog" name="Password">
							<button type="button" id="showLog" style="background:url(../assets/img/locked.png)no-repeat;cursor:pointer;border:none;background-size:20px;" onclick="toggleVisible(this, document.getElementById('passwordLog'))"></button>
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
