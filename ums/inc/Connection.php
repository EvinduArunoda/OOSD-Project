<?php 
	//$connection=mysqli_connect(dbserver,dbuser,dbpass,dbname);
	$connection=mysqli_connect('localhost','root','','userdb');

	//mysqli_connect_errno(); mysqli_connect_error();
	if(mysqli_connect_error()){
		die('Database connection failed'.mysqli_connect_error());
	}else{
		
	}
 ?>