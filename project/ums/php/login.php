<?php require_once('../inc/Connection.php');
	$db = Database::getInstance();
    $connection = $db->getConnection(); ?>
<?php 
	$msg="";
	if (isset($_POST['submit'])){
		$is_successful=false;
		$username=$_POST['username'];
		$psw=$_POST['password'];
		$psw=sha1($psw);
		$query="SELECT * FROM store WHERE Username='$username' ";
		$result=mysqli_query($connection,$query);
		if ($result){
			while ($row=mysqli_fetch_assoc($result))
			{
				$_SESSION['Store_id']=$row['Store_id'];
					if($row['Password']==$psw){
						$msg= "log in successful";
						header("Location:http://localhost/myPhp/project/ums/php/seller_acc.php");
						$is_successful=true;
						break;
					}
			}
			if (!$is_successful){
				$msg= "Log in Failed";
			}
		}
		
	}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>login</title>
	<link rel="stylesheet" href="../css/style_login.css">
</head>
<body>
	<header>
		<div class="main">
			<form class="box" action="login.php" method="post">
				<h3 style="color:red;"><?php echo($msg) ?></h3>
				<h1>LOG IN</h1>
				<br><input type="text" name="username" placeholder="username" required="" id=""><br>
				<input type="password" name="password" placeholder="Password" required="" id=""><br>
				<input type="submit" name="submit"value="Log in" ><br>
				<p>Don't have an account ? <a href="signup.php"> Sign Up Here</a></p>
			</form>
		</div>
	</header>
</body>
</html>