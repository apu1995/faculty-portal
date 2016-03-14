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
	$dept=$_POST['dept'];
	$title=$_POST['title'];
	$duration=$_POST['duration'];
	$year=$_POST['year'];
	$branch=$_POST['branch'];
	$size=$_POST['size'];
	$prereq=$_POST['prereq'];
	$description=$_POST['description'];
	$other=$_POST['other'];

	//String Concatination
	$branches=implode(",",$branch);
	$years=implode(",",$year);

	$sql="UPDATE projects SET dept='".$dept."',title='".$title."',duration=".$duration.",year='".$years."',branch='".$branches."',size=".$size.",prereq='".$prereq."',description='".$description."',other='".$other."' WHERE pid=".$_SESSION['pid'];
	$result = $con->query($sql);

	if($result) 
	{ 
		echo "Successfully updated Database"; 
		header("Location:successful.php");
		$_SESSION['message']='Updated The Project Information Successfully !</br><a href="editproject.php">Edit Another Project</a>';
	}
	else 
	{ 
		die('Error: '.mysqli_error()); 
	} 
	$con->close();	
?>