<!-- Author: Apurva Singh -->
<?php

	include 'connect_db.php';
	error_reporting(E_ERROR | E_PARSE);
	session_start();
	if( !isset($_SESSION['username']))
	{
		header("Location:index.php");
	}

	// Query to Extract all Projects.
	$sql = "SELECT * FROM projects";
	$result = $con->query($sql);

	$pid=$_POST['pid'];
	$_SESSION['pid']=$pid;
	$sql="SELECT * FROM projects where pid=".$pid;
	$result= $con->query($sql);

	$row = $result->fetch_assoc();

	$dept=$row["dept"];
	$title=$row["title"];
	$duration=$row["duration"];
	$year=$row["year"];
	$branch=$row["branch"];
	$size=$row["size"];
	$prereq=$row["prereq"];
	$description=$row["description"];
	$other=$row["other"];
	
	// See which Depatment is Selected.
	if(strcmp($dept," CSE ")==0)
	{
		$ds1="SELECTED";
	}
	else if(strcmp($dept," CCE ")==0)
	{
		$ds2="SELECTED";
	}
	else if(strcmp($dept," ECE ")==0)
	{
		$ds3="SELECTED";
	}
	else if(strcmp($dept," MCH ")==0)
	{
		$ds4="SELECTED";
	}
	else if(strcmp($dept," MTH ")==0)
	{
		$ds5="SELECTED";
	}
	else if(strcmp($dept," PHY ")==0)
	{
		$ds6="SELECTED";
	}
	else
	{
		$ds7="SELECTED";
	}
	

	// Check which years can Apply.
	if (strpos($year,' I ')!== false)
	{
    	$ch1="CHECKED";
	}
	if (strpos($year,' II ')!== false)
	{
    	$ch2="CHECKED";
	}
	if (strpos($year,' III ')!== false)
	{
    	$ch3="CHECKED";
	}
	if (strpos($year,' IV ')!== false)
	{
    	$ch4="CHECKED";
	}

	// See what are the Target Departments.

	if (strpos($branch,' CSE ') !== false)
	{
    	$bs1="SELECTED";
	}
	if (strpos($branch,' CCE ') !== false)
	{
    	$bs2="SELECTED";
	}
	if (strpos($branch,' ECE ') !== false)
	{
    	$bs3="SELECTED";
	}
	if (strpos($branch,' MCH ') !== false)
	{
    	$bs4="SELECTED";
	}
	if (strpos($branch,' MTH ') !== false)
	{
    	$bs5="SELECTED";
	}
	if (strpos($branch,' PHY ') !== false)
	{
    	$bs6="SELECTED";
	}
	if (strpos($branch,' HUM ') !== false)
	{
    	$bs7="SELECTED";
	}
	if (strpos($branch,' ALL ') !== false)
	{
    	$bs8="SELECTED";
	}


?>

<!DOCTYPE HTML> 
<html>
<head>
    <link rel="shortcut icon" href="assets/img/favicon.ico"/>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
    
	<title>
		LUSIP
	</title>
	<script>
		function validate()
		{
			if(document.newproject.dept.value=="")
			{
			 	alert("Please Choose a Department !");
			 	document.newproject.username.focus();
			 	return(false);
			}
			else if(document.newproject.title.value=="")
			{
			 	alert("Please Give a Project Title !");
			 	document.newproject.title.focus();
			 	return(false);
			}
			else if(document.newproject.duration.value=="")
			{
			 	alert("Please Give Duration !");
			 	document.newproject.duration.focus();
			 	return(false);
			}                
			else if(isNaN(document.newproject.duration.value)==true)
			{
			 	alert("Please Enter Numerical Duration Only !");
			 	document.newproject.duration.focus();
			 	return(false);
			}
			else if(isNaN(document.newproject.size.value)===true)
			{
			 	alert("Please Give a Numerical Team Size Only !");
			 	document.newproject.size.focus();
			 	return(false);
			}
			else if(document.newproject.size.value=="")
			{
				alert("Please Give a Team Size !");
			 	document.newproject.size.focus();
			 	return(false);
			}	
			else if(document.newproject.description.value=="")
			{
			 	alert("Please Give a Project Description!");
			 	document.newproject.description.focus();
			 	return(false);
			}	
			document.newproject.submit();
		}
</script>	

<style>

        ul.drop a 
        { 
          display:block; 
          text-decoration: none;
        }
        ul.drop, ul.drop li, ul.drop ul 
        { 
          list-style: none; 
          margin: 0; 
          padding: 0; 
          color: #fff;
        }
        ul.drop 
        { 
          position: relative; 
          z-index: 597; 
          float: left; 
        }
        ul.drop li 
        { 
          float: left; 
          line-height: 1.3em; 
          vertical-align: middle; 
          zoom: 1; 
          padding: 5px 10px; 
        }
        ul.drop li.hover, ul.drop li:hover 
        { 
          position: relative; 
          z-index: 599; 
          cursor: default; 
        }
        ul.drop ul 
        { visibility: hidden; 
          position: absolute; 
          top: 100%; 
          left: 0; 
          z-index: 598; 
          width:180px;
        }
        ul.drop ul li 
        { 
          float: none; 
          margin:0 !important;
        }
        ul.drop ul li a 
        {
          color: #444444 !important;
          display: block;
          float: left;
          font: 170% 'Yanone Kaffeesatz',sans-serif;
          height: 20px;
          padding: 7px 23px 15px;
          text-align: center;
          text-decoration: none;
      	  border:none !important;
        }
        ul.drop ul li a:hover 
        { 
          color: #F14E23 !important;
        }
        ul.drop ul ul 
        { 
          top: -2px; 
          left: 100%; 
        }
        ul.drop li:hover > ul 
        { 
          visibility: visible 
        }

      </style>

      <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-72590713-1', 'auto');
          ga('send', 'pageview');
        </script>

        <script>
            function logout()
            {
              var answer = confirm('Are you sure you want to logout?');
              if (answer)
              {
                  return true;
              }
              else
              {
                  return false;
              }
            }
        </script>

	

</head>
<body>
	 <div id="main">
      <img src="assets/img/lnm.png" style="width:25%;" /><br />
      <div id="menubar">
        <ul id="menu" class="drop">
          <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="home.php">Home</a></li>
          <li><a href="newproject.php">New Project</a></li>
          <li><a href="applications.php">Applications</a></li>
          <li class="current"><a href="#">Projects</a>
          <ul>
          	<li><a href="viewprojects.php">View Projects</a></li>
            <li><a href="editproject.php">Edit Projects</a></li>
          </ul>
          </li>
          <li><a onclick="logout()" href="logout.php">Logout</a></li>
        </ul>
      </div>
  </div>
    
  <div id="site_content">
      <div id="content">
    		<?php
				ob_start();
				ob_end_clean();
			?>
		<center>
			<div id="newproject">
				<h1>Project Details Edit Form</h1></br><br />
				<form method="post" name="newproject" action="updateproject.php">
					<h2>Department</h2></br><br />
					<select name="dept" id="form"> 
						<option selected disabled value="">Select Department</option>	
						<option value =" CSE " <?php echo $ds1 ?> > Computer Science Engineering</option>
						<option value =" CCE " <?php echo $ds2 ?> > Computer and Communication Engineering </option>
						<option value =" ECE " <?php echo $ds3 ?> > Electronics and Communication Engineering </option>
						<option value =" MCH " <?php echo $ds4 ?> > Mechanical and Mechatronics Engineering </option>
						<option value =" MTH " <?php echo $ds5 ?> > Mathematics </option>
						<option value =" PHY " <?php echo $ds6 ?> > Physics </option>
						<option value =" HUM " <?php echo $ds7 ?> > Humanities </option>
					</select></br>
					<br /><h2>Project Title</h2></br>
					<input type="text" maxlength="500" name="title" value=<?php echo '"'.$title.'"' ?> id="form"/></br>
					<br /><h2>Duration (In Weeks)</h2></br>
					<input type="text" maxlength="2" name = "duration" id="form" value=<?php echo '"'.$duration.'"' ?> /></br>
					<br /><h2>Target Year</h2></br>
					1st Year : <input type="checkbox" name = "year[]" id = "one" value=" I " <?php echo $ch1 ?> />
					2nd Year : <input type="checkbox" name = "year[]" id = "two" value=" II " <?php echo $ch2 ?>/>
					3rd Year : <input type="checkbox" name = "year[]" id = "three" value=" III " <?php echo $ch3 ?>/>
					4th Year : <input type="checkbox" name = "year[]" id = "four" value=" IV " <?php echo $ch4 ?>/><br />
					<br /><h2>Target Department</h2></br>
					<select multiple name = "branch[]" id="form">
						<option disabled>(Hold Ctrl key to Select Multiple)</option>
						<option value =" CSE " <?php echo $bs1 ?> > Computer Science Engineering</option>
						<option value =" CCE " <?php echo $bs2 ?> > Computer and Communication Engineering </option>
						<option value =" ECE " <?php echo $bs3 ?> > Electronics and communication Engineering </option>
						<option value =" MCH " <?php echo $bs4 ?> > Mechanical and Mechatronics Engineering </option>
						<option value =" MTH " <?php echo $bs5 ?> > Mathematics </option>
						<option value =" PHY " <?php echo $bs6 ?> > Physics </option>
						<option value =" HUM " <?php echo $bs7 ?> > Humanities</option>
						<option value =" ALL " <?php echo $bs8 ?> > All Other Branches</option>
					</select></br>
					<br /><h2>Team Size</h2></br>
					<input type="text" maxlength="2" name = "size" id="form" value=<?php echo '"'.$size.'"' ?>/></br>
					<br /><h2>Prerequisites</h2></br>
					<textarea name = "prereq" id="form" maxlength="500" rows = "5" cols = "10"><?php echo $prereq ?></textarea></br>
					<br /><h2>Description</h2></br>
					<textarea name = "description" id="form" maxlength="5000" rows = "5" cols = "10"><?php echo $description ?></textarea></br>
					<br /><h2>Other Faculty Involved</h2></br>
					<input type="text" maxlength="500" name = "other" id="form" value=<?php echo '"'.$other.'"' ?> /></br>
					<input type="button" value="Submit" onClick="validate()"/ id="button"></br>
			
				</form>
			</div>
		</center>
	 </div>
  </div>
  
  </body>
</html>
	 
