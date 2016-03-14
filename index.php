<!-- Author: Apurva Singh -->
<!DOCTYPE html>
<head>
    <title>
        LUSIP
    </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico"/>
    
    <!-- CSS FILES -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>

    
    <!-- Script to Check if Username and Password have been entered -->
    <script>
        function validate()
        {
            if( document.loginform.username.value == "" )
            {
                alert( "Please Enter Your Username!" );
                document.loginform.username.focus() ;
                return(false);
            }
            else if( document.loginform.password.value == "" )
            {
                alert( "Please Enter The Password!" );
                document.loginform.password.focus() ;
                return(false);
            }
            else
            {
                loginform.submit();
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
        html 
        { 
            background: url(assets/img/backgrounds/1.jpg) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>

</head>
<?php
   
    if(isset($_SESSION['username']))
    {
        session_start();
        session_unset();
        session_destroy();
    }

?>
<body>
    <img src="assets/img/lnm.png" style="margin:20px;left:100px;">
    <center>
    <div class="login_box">
        <p id="heading">Faculty Login Portal</p>
        <hr></br>
        <?php 
            session_start();
            if( !isset( $_SESSION['error'] ) )
            {
                $_SESSION['error']="";
            }
        ?>
        <form method="POST" action="login.php" name="loginform">
            <?php 
                echo "".$_SESSION['error'];
            ?>
            <input type="text" name="username" placeholder="Username" id="input" onFocus="this.select();" /></br>
            <input type="password" name="password" placeholder="Password" id="input" onFocus="this.select();" /></br>
            <!-- <button type="reset" id="button" >Reset</button> -->
            <input type="button" onclick="validate()" id="button" value="Login">
            <input type="reset" id="button" value="Reset">
        </form>
        <?php

            $_SESSION['error']="";

        ?>
        
    </div>
    </center>

</body>
</html>
