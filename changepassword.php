<?php
session_start();

if(!isset($_SESSION['Email']))
{ die();
}?>
<!DOCTYPE html>
<!--
BUDGET WEBSITE
CHANGES THE PASSWORD FOR THE CURRENT USER
ASKS FOR OLD AND NEW PASSWORD FOR THEIR ACCOUNT
CHANGEPASSWORDDBMS.PHP DOES THE PROCESSING OF DATA
-->

<html>
    <head>
        <title>Ctrl Budget Website</title>
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
                <form method="post" action="changepassworddbms.php">
                <div class="form-header">Change Pasword</div>
                <div class="form-content">
                    <div class="input-title">Old Password</div> 
                    <input type="password" id="oldpassword" class="inputs" placeholder="Old Password" name="OLDPASSWORD"  required ><br>
                    <div class="input-title">New Password</div>
                    <input type="password" id="newpassword" class="inputs" placeholder="New Password(Min 6 Characters)" name="NEWPASSWORD"  required pattern=".{6,}" title="Password must be alteast of 6 digits" >
                    <div class="input-title">Confirm New Password</div>
                    <input type="password" id="repassword" class="inputs" placeholder="Re-type New Password" name="REPASSWORD"  required>
                    <button type="submit" class="form-btn">Change</button>
                   
                </div></form>
                
          </center>
    </div>
        <?php include "footer.php"; ?>
       </div>
       </body>
</html>