<?php require_once('inc/connection.php') ;?>

<?php 
	if (isset($_POST['submit'])){
		$is_successful=false;
		$username=$_POST['username'];
		$psw=$_POST['password'];
		$psw=sha1($psw);
		$query="SELECT * FROM user WHERE Username='$username' ";
		$results=mysqli_query($connection,$query);
		if ($results){
			
			while ($row=mysqli_fetch_assoc($results)){
					if($row['Password']==$psw){
						echo "login successful";
						$is_successful=true;
						break;
					}
			}
			if (!$is_successful){
				echo "Log in Failed";
			}
		}
		
	}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>login</title>
	<link rel="stylesheet" href="style_login.css">
</head>
<body>
	<header>
		<div class="main">
			<form class="box" action="login.php" method="post">
				<h1>LOG IN</h1>
				<input type="text" name="username" placeholder="username" required="" id=""><br>
				<input type="password" name="password" placeholder="Password" required="" id=""><br>
				<input type="submit" name="submit"value="Log in" ><br>
			</form>
		</div>
	</header>
</body>
</html>
<?php mysqli_close($connection); ?>