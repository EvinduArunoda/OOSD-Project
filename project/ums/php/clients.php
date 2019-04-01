<?php require_once('../inc/Connection.php') ;?>

<!DOCTYPE html>
<html>
<head>
	<title>NOVUS CREATIONS</title>
	<link rel="stylesheet" type="text/css" href="../css/clients.css">
</head>
<body>
	<header class="clearfix">
		<div class="main">
			<ul>
				<li><a href="seller_acc.php">Home</a></li>
				<li><a href="services.php">Services</a></li>
				<li class="active"><a href="#">Our Clients</a></li>
				<li><a href="contact_us.php">Contact us</a></li>
				<li><a href="about_us.php">About us</a></li>		
			</ul>
		</div>
		<div class="title">
			<h1>MyChoice.lk</h1>
		</div>
		<div class="display_data">
			<table>
				<tr>
					<th>Store Name</th>
					<th>Email Address</th>
					<th>Telephone</th>
					<th>Mobile</th>
					<th>Website</th>
				</tr>
				<?php 
					$sql = "SELECT * FROM store";
					$result = mysqli_query($connection, $sql);
					$resultCheck = mysqli_num_rows($result);
					if($resultCheck>0){
						while ($row = mysqli_fetch_assoc($result)) {
							echo "<tr><td>" . $row['Store_name'] . "</td><td>" . $row['Email'] . "</td><td>" . $row['Telephone'] . "</td><td>" . $row['Mobile'] . "</td><td>" . $row['Website'] . "</td></tr>";
						}
						echo "</table>";
					}
				?>
			</table>
		</div>
	</header>
</body>
</html>
<?php mysqli_close($connection); ?>