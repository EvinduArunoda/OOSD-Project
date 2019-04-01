<?php require_once('../inc/Connection.php');
	$db = Database::getInstance();
    $connection = $db->getConnection();  ?>
<!DOCTYPE html>
<html>
<head>
	<title>MYCHOICE.lk
	</title>
	<link rel="stylesheet" type="text/css" href="../css/style_home.css">
</head>
<body>
	<header>
		<div class="main">
			<ul>
				<li class="active"><a href="#">Home</a></li>
				<li><a href="http://localhost/myPhp/project/ums/php/services.php">Services</a></li>
				<li><a href="http://localhost/myPhp/project/ums/php/about_us.php">About us</a></li>
				<li><a href="http://localhost/myPhp/project/ums/php/clients.php">Our Clients</a></li>
				<li><a href="http://localhost/myPhp/project/ums/php/contact_us.">Contact</a></li>		
			</ul>
		</div>
		<div class="title">
			<h1>MYCHOICE.lk</h1>
		</div>
		<div class="subtitle"><h2>We just compare, choice is yours</h2></div>
		<div class="button">
			<a class="btn" href="http://localhost/myPhp/project/ums/php/homepage.php">I am a customer </a>
			<a class="btn" href="http://localhost/myPhp/project/ums/php/home.php">I am a seller</a>
		</div>
	</header>

</body>
</html>