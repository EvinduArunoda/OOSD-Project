<?php require_once('../inc/Connection.php');
	$db = Database::getInstance();
    $connection = $db->getConnection();
	$Store_id=$_SESSION['Store_id'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>NOVUS CREATIONS</title>
	<link rel="stylesheet" type="text/css" href="../css/seller_acc1.css">
</head>
<body>
	<header class="clearfix">
		<div class="main"> 
			<ul>
				<li class="active"><a href="#">Home</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="clients.php">Our Clients</a></li>
				<li><a href="contact_us.php">Contact us</a></li>
				<li><a href="about_us.php">About us</a></li>		
			</ul>
		</div>
		<div class="title">
			<h1>MyChoice.lk</h1>
		</div>
		<div class="dropdown">
			<button class="dropbutton">-- Select what to do --</button>
			<div class="dropdown_content">
				<a href="http://localhost/myPhp/project/ums/php/add_item.php">Add item</a>
				<a href="http://localhost/myPhp/project/ums/php/remove_item.php">Remove item</a>
				<a href="#">Update item details</a>
				<a href="#">Edit profile</a>
				<a href="http://localhost/myPhp/project/ums/php/view_items.php">View my items</a>
				<a href="http://localhost/myPhp/project/ums/php/logout.php">Log out</a>
				<a href="#">Sign out</a>
			</div>
		</div>
		<h1>Came</h1>
	</header>
</body>
</html>