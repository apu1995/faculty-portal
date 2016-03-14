<!-- Author: Apurva Singh -->
<?php

	include 'connect_db.php';
	session_start();
	if( !isset($_SESSION['username']))
	{
		header("Location:index.php");
	}

	// Query to Extract all Projects.
	$sql = "SELECT * FROM projects";
	$result = $con->query($sql);

?>