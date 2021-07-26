<?php
session_start();

if(!isset($_SESSION['Email']))
{ die();
}?>
<!DOCTYPE html>
<!--
PAGE FOR TAKING ADDITION DETAILS FOR THE NEW PLAN
TITAL
DATE FROM TILL TO
NAME OF THE PERSONS
AND SENDING ALL DATA FOR PROCESSING TO DETAILS.DBMS
-->

<html>
    <head>
        <title>Ctrl Budget Website|DETAILS</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css" > 
    </head>
    <body>
          <div class="responsive">
               <?php include "header.php";?>
                 <div class="form-bg">          
            
                <form method="post" action="detailsdbms.php">
                     <center class="form-txt-bg">
                           
                    <div class="input-title">Title</div> 
                    <input type="text" id="title" class="inputs" placeholder="Enter Title(Ex.Trip to Goa)" name="TITLE" required><br>
                    <div class="input-title lineT">From</div>
                    <div class="input-title lineT">To</div>
                    <input type="date" id="from" class="inputs lineA"  name="FROM" required="">
                    <input type="date" id="to" class="inputs lineA"  name="TO" required="">
                     <div class="input-title lineT">Initial Budget</div> 
                     <div class="input-title lineT">No. of people</div>
                     <input type="number" id="initial-budget" class="inputs lineB" value="<?php $Initial=filter_input(INPUT_POST, 'INITIAL-BUDGET');echo "$Initial"; ?>" name="INITIAL-BUDGET" disabled><br>
                     <input type="number" id="group" class="inputs lineB" value="<?php $group=filter_input(INPUT_POST, 'GROUP');echo "$group"; ?>" name="GROUP" disabled>
                     <?php 
                    
                    for($i=1;$i<=$group;$i=$i+1)
                    {
                      echo " <div class='input-title'>Person $i</div> 
                    <input type='text' id='person' class='inputs' placeholder='Person $i Name' name='PERSON$i' required><br>";
                    }
                    ?>
                     <?php 
                     $_SESSION['initial']=$Initial;
                     $_SESSION['group']=$group;
                     ?>
                    
                    <button type="submit" class="plan-next">Submit</button>
                               
                </center>
                </form>       
    </div>
        <?php include "footer.php";?>
         </div>
         </body>
</html>