<?php require_once('../inc/Connection.php');
	$db = Database::getInstance();
    $connection = $db->getConnection();  ?>
<!DOCTYPE html>
<html>
<head>
	<title>MyChoice.lk</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<header>
		<div class="title">
			<h1>MyChoice.lk</h1>
		</div>
		<div class="button">
			<a class="btn" href="http://localhost/myPhp/project/ums/php/store_add.php">REGISTER</a>
			<a class="btn" href="http://localhost/myPhp/project/ums/php/login.php">LOG IN</a>
		</div>
	</header>
</body>
</html>