<?php 
session_start();
if(!isset($_SESSION['Email']))
{
    include "destroysess.php";
}?>
<!DOCTYPE html>
<!--
LOGIN PAGE OF BUDGET WEBSITE TAKING EMAIL AND PASSWORD AND TRANSFERING CONTROL TO LOGINDBMS.PHP
-->
<html>
    <head>
        <title>Ctrl Budget Website|LOGIN</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
       <link rel="stylesheet" href="style.css" type="text/css" > 
    </head>
    <body>
          <div class="responsive">
            
            <?php include "header.php";?>
              <div class="form-bg">          
            <center class="form-txt-bg">
                <form method="post" action="logindbms.php">
                <div class="form-header">Login</div>
                <div class="form-content">
                    <div class="input-title">Email:</div>
                    <input type="email" id="email" class="inputs" placeholder="Email" name="EMAIL">
                    <div class="input-title">Password:</div>
                    <input type="password" id="password" class="inputs" placeholder="Password" name="PASSWORD" >
                    <button type="submit" class="form-btn">Login</button>
                </div>
                <div class="form-footer">
                    Don't have a account?<a href="signup.php"> Click here to Sign Up</a>
                </div>
                </form>
        </center>
    </div>
        <?php include "footer.php";?>
         </div>
         </body>
</html>