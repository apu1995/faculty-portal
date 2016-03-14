<!-- Author: Apurva Singh -->
<?php

	include 'connect_db.php';
	error_reporting(E_ERROR | E_PARSE);
	if( !isset($_SESSION['username']))
	{
		header("Location:index.php");
	}
	session_start();
	// Getting Form Values
	$pass=$_POST['pass'];
	$rpass=$_POST['rpass'];

	$sql="UPDATE login SET password='".md5($pass)."' ,flag=1 WHERE username='".$_SESSION['username']."'";
	$result = $con->query($sql);

	if($result) 
	{ 
		//echo "Successfully updated Database";
		$_SESSION['message']='Updated The Password Successfully !<br>'; 
		header("Location:successful.php");
	}
	else 
	{ 
		die('Error: '.mysqli_error()); 
	} 
	$con->close();	
?>