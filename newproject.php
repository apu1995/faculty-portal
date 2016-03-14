<!-- Author: Apurva Singh -->
<!DOCTYPE html>
<html>
  <head>
    <title>LUSIP</title>
      <meta name="description" content="website description">
      <meta name="keywords" content="website keywords, website keywords">
      <meta http-equiv="content-type" content="text/html; charset=windows-1252">
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <?php

          session_start();
          if( !isset($_SESSION['username']))
          {
              header("Location:index.php");
          }

    ?>
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
			 else if(document.newproject.size.value=="")
			 {
				 alert("Please Give a Team Size !");
			 	 document.newproject.size.focus();
			 	 return(false);
			 }
       else if(isNaN(document.newproject.size.value)===true)
       {
         alert("Please Give a Numerical Team Size Only !");
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

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-72590713-1', 'auto');
          ga('send', 'pageview');
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
 	<link rel="shortcut icon" href="assets/img/favicon.ico"/>	
  </head>
  
<body>
 
  <div id="main">
      <img src="assets/img/lnm.png" style="width:25%;" /><br />
      <div id="menubar">
        <ul id="menu" class="drop">
          <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="home.php">Home</a></li>
          <li class="current"><a href="newproject.php">New Project</a></li>
          <li><a href="applications.php">Applications</a></li>
          <li><a href="#">Projects</a>
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
        

    <center>
		<h1>Project Submission Form</h1></br></br>
		<form method="post" name="newproject" action="projectsubmit.php">
			</br><h2>Department</h2></br>
			<select name="dept" id="form"> 
				<option selected disabled value="">Select Department</option>	
				<option value =" CSE "> Computer Science Engineering</option>
				<option value =" CCE "> Computer and Communication Engineering </option>
				<option value =" ECE "> Electronics and Communication Engineering </option>
				<option value =" MCH "> Mechanical and Mechatronics Engineering </option>
				<option value =" MTH "> Mathematics </option>
				<option value =" PHY "> Physics </option>
				<option value =" HUM "> Humanities </option>
			</select></br></br>
			</br><h2>Project Title</h2></br>
			<input type="text" maxlength="500" name="title" placeHolder="Title" id="form"/></br>
			</br><h2>Duration (In Weeks)</h2></br>
			<input type="text" maxlength="2" name = "duration" id="form" placeHolder="Number of weeks" /></br>
			</br><h2>Target Year</h2></br>
			1st Year : <input type="checkbox" name = "year[]" id = "one" value=" I " checked />&nbsp&nbsp&nbsp
			2nd Year : <input type="checkbox" name = "year[]" id = "two" value=" II "/>&nbsp&nbsp&nbsp
			3rd Year : <input type="checkbox" name = "year[]" id = "three" value=" III "/>&nbsp&nbsp&nbsp
			4th Year : <input type="checkbox" name = "year[]" id = "four" value=" IV "/>&nbsp&nbsp&nbsp <br />
			</br><h2>Target Department</h2></br>
			<select multiple name = "branch[]" id="form" rows="20" cols="10">
				<option disabled>(Hold Ctrl key to Select Multiple)</option>
				<option value =" CSE " selected> Computer Science Engineering</option>
				<option value =" CCE "> Computer and Communication Engineering </option>
				<option value =" ECE "> Electronics and communication Engineering </option>
				<option value =" MCH "> Mechanical and Mechatronics Engineering </option>
				<option value =" MTH "> Mathematics </option>
				<option value =" PHY "> Physics </option>
				<option value =" HUM "> Humanities</option>
				<option value =" ALL "> All Other Branches</option>
			</select></br></br>
			</br><h2>Team Size</h2></br>
			<input type="text" maxlength="2" name = "size" id="form" placeHolder='Size of Team desired (Only Numerical Value)'/></br>
			</br><h2>Prerequisites</h2></br>
      <textarea name = "prereq" id="form" maxlength="500"  placeHolder='Prerequisites for the project (if any)' rows = "5" cols = "10"></textarea></br>
			</br><h2>Description</h2></br>
			<textarea name = "description" id="form" maxlength="5000"  placeHolder='Please give detailed description of project.' rows = "5" cols = "10"></textarea></br>
			</br><h2>Other Faculty Involved</h2></br>
			<input type="text" maxlength="500" name = "other" id="form" placeHolder='Names of Faculties(if any)'/></br></br>
			<input type="button" value="Submit" onClick="validate()" id="button" />
			<input type = "reset" value = "Reset" id="button" /></br>
		</form>
	</center>
    
    </div>
  </div>
  
  </body>
</html>
	