<!-- Author: Apurva Singh -->
<?php

include 'connect_db.php';
$uname = $_POST['username']; 
$pass = $_POST['password'];  
if($uname && $pass)
{
	$sql = "select * from login where username='".$uname."'and password='".md5($pass)."'"; 
	$result = $con->query($sql); 
	if($result->num_rows > 0)
	{
		$_SESSION['username']=$uname;
		$row = $result->fetch_assoc();
		if($row["flag"]==1)
		{
			header("Location:home.php");
			//echo "no need to change password !";
		}
		else
		{
			header("Location:changepassword.php");
			//echo "need to change password !";
		}
	}
	else
	{
		$_SESSION['error']="Incorrect Usernamme or Password";
		header("Location:index.php");
	}
	$con->close();
}

?>