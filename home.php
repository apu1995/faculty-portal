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

     
  </head>
  <link rel="shortcut icon" href="assets/img/favicon.ico"/>
<body>
  <div id="main">
      <img src="assets/img/lnm.png" style="width:25%;" /><br />
      <div id="menubar">
        <ul id="menu" class="drop">
          <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
          <li class="current"><a href="home.php">Home</a></li>
          <li><a href="newproject.php">New Project</a></li>
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
        

        LUSIP offers you an invaluable platform to engage in cutting edge research and challenging projects with the esteemed faculties and mentors of The LNM Institute of Information Technology.It is a unique opportunity to gain practical experience and an insight into professional life. In all it is the best way for you to get a hands on experience of the opportunities available in your area of interest.LUSIP runs from May to July each year to offer summer research internship opportunities to eligible college undergraduates across the country considering a career in fields of:
        <br /><br />
        <ul>
          <li>CSE - Computer Science and Engineering</li>
          <li>ECE - Electronic Communication and Engineering</li>
          <li>CCE - Computer and Communication Engineering</li>
          <li>MCH - Mechanical and Mechatronics Engineering</li>
          <li>PHY - Physics</li>
          <li>MTH - Mathematics</li>
          <li>HUM - Humanities</li>
          <li>R&S - Research and Strategy</li>
        </ul>
        <br />
        <strong>Eligibility Criteria</strong><br /><br />
        All the students pursuing BE/B.Tech in the above fields are eligible to apply, other than that :
        <br />
        No minimum CPI/CGPA requirements.
        
    </div>
  </div>
  
  </body>
</html>