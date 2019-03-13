<?php require_once('inc/connection.php'); ?>
<?php 
	if (isset($_POST['submit'])){
		$email=$_POST['emailAddress'];
		$username=$_POST['username'];
		$psw=$_POST['password'];
		$reconfirmed_psw=$_POST['reconfirmedPassword'];
		$is_deleted=0;
		if ($psw==$reconfirmed_psw){
			$psw=sha1($psw);
			$query="INSERT INTO user(Username,email,Password,is_deleted)VALUES ('{$username}','{$email}','{$psw}',{$is_deleted})";	
			$result=mysqli_query($connection,$query);
			if($result){
				echo "Sign up Successful";
			}
		}else{
			echo "Please, Re-Check your password";
		}
		
	}
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>signup</title>
	<link rel="stylesheet" href="style_signup.css">
</head>
<body>
	<header>
		<div class="main">
	<form class="box" action="signup.php" method="post">
		<h1>SIGN UP</h1>
		<input type="email" name="emailAddress" placeholder="Email Address">
		<input type="text" name="username" placeholder="Username" id="">
		<input type="password" name="password" placeholder="Password" id="">
		<input type="password" name="reconfirmedPassword" placeholder="Re-Confirm Password">
		<input type="submit" name="submit"value="Sign up" >

	</form>
	</div>
	</header>
</body>
</html>