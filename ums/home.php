<?php require_once('inc/connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>NOVUS CREATIONS</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div class="main">
			<ul>
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">About us</a></li>		
			</ul>
		</div>
		<div class="title">
			<h1>NOVUS CREATIONS</h1>
		</div>
		<div class="button">
			<a class="btn" href="http://localhost/myPhp/ums/signup.php">SIGN UP</a>
			<a class="btn" href="http://localhost/myPhp/ums/login.php">LOG IN</a>
		</div>
	</header>

</body>
</html>
<?php mysqli_close($connection); ?>