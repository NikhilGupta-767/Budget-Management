<?php 
session_start();
if(isset($_SESSION['Email']))
{
    include "destroysess.php";
}?>
<!DOCTYPE html>
<!--
BUDGET WEBSITE
REGISTER THE USER FOR BUDGET SESSIONS
INFORMATION FOR SIGN UP
NAME
EMAIL
PASSWORD
PHONE NUMBER
SIGNUPDBMS.PHP DOES THE PROCESSING OF DATA
-->

<html>
    <head>
        <title>Ctrl Budget Website|SIGNUP</title>
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
                <form method="post" action="signupdbms.php">
                <div class="form-header">Sign Up</div>
                <div class="form-content">
                    <div class="input-title">Name:</div> 
                    <input type="text" id="name" class="inputs" placeholder="Name" name="NAME" required><br>
                    <div class="input-title">Email:</div>
                    <input type="email" id="email" class="inputs" placeholder="Enter Valid Email" name="EMAIL" required="">
                    <div class="input-title">Password:</div>
                    <input type="password" id="password" class="inputs" placeholder="Password (Min 6 Characters)" name="PASSWORD"  required pattern=".{6,}" title="Password must be alteast of 6 digits" >
                    <div class="input-title">Phone Number:</div>
                    <input type="text" id="pnumber" class="inputs" placeholder="Enter Valid PhoneNumber (Ex:8448448445)" name="PNUMBER" pattern=".[0-9]{9,9}" title="Enter correct Phone Number"required>
                    <button type="submit" class="form-btn">Sign Up</button>
                   
                </div></form>
                
          </center>
    </div>
        <?php include "footer.php";?>
         </div>
         </body>
</html>