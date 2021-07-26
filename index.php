<?php 
session_start();
if(isset($_SESSION['Email']))
{
    include "destroysess.php";
}?>
<!DOCTYPE html>
<!--
PROJECT PROBLEM STATEMENT
CTRL BUDGET(Expense Manager) Primary file
-->
<html>
    <head>
        <title>Ctrl Budget Website</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <meta name="description" content="Come to us for easy management of our budget" >           
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" type="text/css" >        
    </head>
    <body>
        <div class="responsive">
            
            <?php include "header.php";?>
            <div id="backcover">          
            <center id="imagecontent">
                We help you to control your budget<br><br>
                <a href="login.php"><button type="button" class="button">Start Today</a></button>
            </center>
    </div>
        <?php include "footer.php";?>
         </div>
         </body>
</html>
  