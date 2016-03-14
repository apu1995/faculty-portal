<!-- Author: Apurva Singh -->
<?php

	include 'connect_db.php';
	error_reporting(E_ERROR | E_PARSE);
	session_start();
	if( !isset($_SESSION['username']))
	{
		header("Location:index.php");
	}

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

	// Printing Form Values
	echo $dept."</br>";
	echo $title."</br>";
	echo $duration."</br>";
	echo $branches."</br>";
	echo $size."</br>";
	echo $prereq."</br>";
	echo $description."</br>";
	echo $other."</br>"; 
	echo $years."</br>";

	// Inserting into Database
	$sql = "INSERT INTO projects(faculty,dept,title,duration,branch,size,prereq,description,other,year)VALUES('".$_SESSION['username']."','".$dept."','".$title."',".$duration.",'".$branches."',".$size.",'".$prereq."','".$description."','".$other."','".$years."')"; 
	$result = $con->query($sql);

	if($result) 
	{ 
		echo "Successfully updated database"; 
		header("Location:successful.php");
		$_SESSION['message']='Updated The Project List Sussessfully !</br><a href="newproject.php">Submit Another Project</a>';
	}
	else 
	{ 
		die('Error: '.mysqli_error()); 
	} 
	$con->close();

?>