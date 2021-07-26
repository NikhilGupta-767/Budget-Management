<?php
session_start();

if(!isset($_SESSION['Email']))
{ die();
}?>
<!DOCTYPE html>
<!--
PAGE TO CREATE A NEW PLAN ACCEPTING ONLY INITIAL BUDGET AND NO.OF PEOPLES AND SENDING DATA TO DETAILS.PHP
-->

<html>
    <head>
        <title>Ctrl Budget Website|NEW PLAN</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css" > 
    </head>
    <body>
          <div class="responsive">
               <?php include "header.php";?>
                 <div class="form-bg">          
            
                <form method="post" action="details.php">
                    <center class="form-txt-bg">
                <div class="plan-form-header">Create New Plan</div>
                <div class="form-content">
                    <div class="input-title">Initial Budget</div> 
                    <input type="number" id="initial-budget" class="inputs" placeholder="Initial Budget(Ex.4000)" name="INITIAL-BUDGET" required><br>
                    <div class="input-title">How many peoples you want to add in your group?</div>
                    <input type="number" id="group" class="inputs" placeholder="No. of people" name="GROUP" required="">
                    
                    <button type="submit" class="plan-next">Next</button>
                </div>
                    </center>
                   
             </form>
                
        
    </div>
        <?php include "footer.php";?>
         </div>
         </body>
</html>