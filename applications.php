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

     
  </head>
  <link rel="shortcut icon" href="assets/img/favicon.ico"/>
<body>
   <div id="main">
      <img src="assets/img/lnm.png" style="width:25%;" /><br />
      <div id="menubar">
        <ul id="menu" class="drop">
          <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="home.php">Home</a></li>
          <li><a href="newproject.php">New Project</a></li>
          <li class="current" ><a href="applications.php">Applications</a></li>
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

		Applications to projects have not yet been opened.

    </div>
  </div>
  
  </body>
</html>