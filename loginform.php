<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">

	<title>Login Page</title>
</head>
<body>
	<div class="container">
		<div class="navbar">
			<a href="loginform.php"><img src="logo (2).png" class="logo"></a>
			<nav>
				<ul>
					<li><a href="login.php"><b>LOGIN</b></a></li>
					<li><a href="loginform.php"><b>SIGN-UP</b></a></li>
					<li><a href="#" style="color: white;"><b>CONTACT US</b></a></li>
				</ul>
			</nav>
			<img src="" class="menu-icon">
		</div>

		<div class="row">
			<div class="col">
				<h1>Vapour Gaming</h1>
				<h4>New to this site?</h4>
				<div id="frm">
					<form action="process.php" method="POST">
						<p>
							<label>Username : </label>
							<input type="text" id="user" name="user" placeholder="Enter username" />
						</p>
						<p>
							<label>Password : </label>
							<input type="Password" id="password" name="password" placeholder="Enter password" />
						</p>
						<p>
							<button class="btn btn-primary btn-md">Login</button>
						</p>
					</form>
				</div>
			</div>	
		</div>
	</div>
</body>
</html>