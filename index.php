<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LogInEXv2</title>
	<link rel="stylesheet" type="text/css" href="./Module Index/Styles/index.css">
</head>
<body>

	<div class="form-container">
		<div class="col col-1">
			<img src="./src/referalimage.png" class="form-image-main">
		</div>

		<div class="col col-2">
			<div class="btn-box">
				<button class="btn btn-1" onclick="controller_Btn_SignIn()" id="login">Sign In</button>
				<button class="btn btn-2" onclick="controller_Btn_SignUp()" id="register">Sign Up</button>
			</div>

			<!---Login Form--->
			<form onsubmit="controller_Btn_Login(event)">
			<div class="login-form">
				<div class="form-title">
					<span>Sign In</span>
				</div>
				<div class="form-inputs">
					<div class="input-box">
						<input type="text" id="username" class="input-field" placeholder="Username" required>
						<i class="bx bx-user icon"></i>
					</div>
					<div class="input-box">
						<input type="password" id="password" class="input-field" placeholder="Password" required>
						<i class="bx bx-lock-alt icon"></i>
					</div>
					<div class="forgot-pass">
						<a href="#">Forgot Password?</a>
					</div>
					<div class="input-box">
						<button type="submit" class="input-submit">
							<span>Sign In</span>
							<i class="bx bx-right-arrow-alt"></i>
						</button>
					</div>
				</div>
				<div class="social-login">
					<i class="bx bxl-google"></i>
					<i class="bx bxl-facebook"></i>
					<i class="bx bxl-twitetr"></i>
					<i class="bx bxl-github"></i>
				</div>
			</div>
			</form>

				<!---regist Form--->
			<form>
			<div class="register-form">
				<div class="form-title">
					<span>Create Account</span>
				</div>
				<div class="form-inputs">
					<div class="input-box">
						<input type="text" class="input-field" placeholder="Email" required>
						<i class="bx bx-envelope icon"></i>
					</div>
					<div class="input-box">
						<input type="text" class="input-field" placeholder="Username" required>
						<i class="bx bx-user icon"></i>
					</div>
					<div class="input-box">
						<input type="password" class="input-field" placeholder="Password" required>
						<i class="bx bx-lock-alt icon"></i>
					</div>
					<div class="forgot-pass">
						<a href="#">Forgot Password?</a>
					</div>
					<div class="input-box">
						<button class="input-submit">
							<span>Create Account</span>
							<i class="bx bx-right-arrow-alt"></i>
						</button>
					</div>
				</div>
				<div class="social-login">
					<i class="bx bxl-google"></i>
					<i class="bx bxl-facebook"></i>
					<i class="bx bxl-twitetr"></i>
					<i class="bx bxl-github"></i>
				</div>
			</div>
			</form>
		</div>
	</div>

	<script type="module" src="./Module Index/Client Side/Controller_Btn_SignIn.js"></script>
	<script type="module" src="./Module Index/Client Side/Controller_Btn_SignUp.js"></script>
	<script type="module" src="./Module Index/Client Side/Controller_Btn_Login.js"></script>
</body>
</html>