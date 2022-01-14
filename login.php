<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<link rel="stylesheet" href="test.css">
</head>
<body>
  <header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top" >
            <div class="container-fluid">
                <a class="navbar-brand" href="guest-homepage.php">
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
			<form action="process-login.php" method="post">
			<div class="container py-5">
			  <div class="row d-flex justify-content-center align-items-center">
				<div class="col-xl-4">
				  <div class="card" style="border-radius: 8px;">
					<div class="card-body text-center" >
		  
					  <h3 style="text-align: left">Sign in</h3>
					  <p  style="text-align: left; font-size: 10px;" >Stay updated on your professional world</p>
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
						<div>
						<a href="#" class="forgot-password-link">
						Forgot Password?
						</a>
						</div>
				<button class="btn-sign" type="submit" name="btnSignIn" style="width:270px; margin-top: 20px;">Sign in</button>
				<hr>
				<button class="btn-signwapple"><i class="fab fa-apple"></i>Sign in with an Apple</button>
				<p class="join-link">
					New to linkedin?
					<a href="#" class="join-now">
						Join now
					</a>
				</p>
				  </div>
				  
					<div class=" d-flex justify-content-center align-items-center mt-2" style="display: inline;">New to LinkedIn? 
						<button class="btn-join"><a class="text-primary-50" href="#!">Join now</a></button>
					</div>
				</div>
			</div>
			</div>
			</form>
	</main>
	<footer>
		<div class="mt-3" style="text-align: center;">
		  <div class="col-md ms-5 me-5 " >
			  <ul class="list-footer">
				  <li><p style="margin-top: 14px; display: inline-flex;">Linked
					  <i class="bi bi-linkedin"></i>
					  <span style="color: rgb(119, 108, 108) ;" class="footer-text">© 2022 </span>
					  </p>
				  </li>
				  <li><a href="" class="text-decoration-none link-dark">User Agreement</a></li>
				  <li><a href="" class="text-decoration-none link-dark">Privacy Policy</a></li>
				  <li><a href="" class="text-decoration-none link-dark">Community Guidelines</a></li>
				  <li><a href="" class="text-decoration-none link-dark">Cookie Policy</a></li>
				  <li><a href="" class="text-decoration-none link-dark">Copyright Policy</a></li>
				  <li><a href="" class="text-decoration-none link-dark">Send Feedback</a></li>
				  <li><a href="" class="text-decoration-none link-dark">Language</a></li>
			  </ul>
		  </div>
	  </div>
	  </div>
	</footer>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
</body>
</html>