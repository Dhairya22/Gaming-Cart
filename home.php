<?php

session_start();

?>

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
				<h1>Welcome to </h1>
				<h1>Vapour Gaming</h1>
				<p style="font-family: arial; font-size: 20px; margin-top: 40px;">A site for gamers to buy and know everything about almost all games.</p>
				<a href="cart.php"><button class="btn btn-primary"> Get Started !!</button></a>
			</div>	
		</div>
	</div>
</body>
</html>