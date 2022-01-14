<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<link rel="stylesheet" href="css/login.css">
</head>

<body>
	<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top" >
				<div class="container-fluid">
					<a class="navbar-brand" href="index.php">
						<button type="button" class="btn btn-white ms-5" style="color: #0a66c2;font-weight: 700; font-size: 25px;">
								Linked<i class="bi bi-linkedin">
								</i>
						</button>
					</a>
				</div>
			</nav>
		</div>
	</header>

	<main>
		<div class="container-fluid">
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
		</div>
	</main>
</body>

</html>
