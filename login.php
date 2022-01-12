<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="Free Web tutorials" />
	<meta name="keywords" content="HTML, CSS, JavaScript" />
	<meta name="author" content="John Doe" />
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0" />
	<title>LinkedIn</title>
	<link rel="stylesheet" href=
		"https://use.fontawesome.com/releases/v5.7.0/css/all.css"
		integrity=
		"sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
		crossorigin="anonymous" />
	<link rel="stylesheet" href="login.css" />

</head>

<body>
	<main>
		<div class="container">
			<form  action="process-login.php" method="post">
			<h2>Linked<span>
				<i class="fab fa-linkedin"></i>
			</span></h2>
			<div class="text">
				<h1>Sign in</h1>
				<p>Stay updated on your professional world</p>
			</div>
			<div class="your-input">
				<div class="input">
					<input type="text"  name="txtEmail"
					id="inputEmail" required autofocus>
					<label for="inputEmail">Email</label>
				</div>
				<div class="input">
					<input type="password" name="txtPass"
					id="inputPassword" required >
					<label for="inputPassword">
						Password
					</label>
				</div>
			</div>
			<a href="#" class="forgot-password-link">
				Forgot Password?
			</a>
			<button class="btn-sign" type="submit" name="btnSignIn">Sign in</button>
			<hr>
			<button class="btn-signwapple"><i class="fab fa-apple"></i>Sign in with an Apple</button>
			<p class="join-link">
				New to linkedin?
				<a href="#" class="join-now">
					Join now
				</a>
			</p>
			</form>
		</div>
	</main>
</body>

</html>
