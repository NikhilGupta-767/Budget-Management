<?php
session_start();

if(!isset($_SESSION['Email']))
{ die();
}?>
<!DOCTYPE html>
<!--
BUDGET WEBSITE
HOME PAGE CONTAINING ALL THE USERS PLANS/FETCHING ALL USER DATA FROM DATABASES 
-->

<html>
    <head>
        <title>Ctrl Budget Website|HOME</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css" > 
    </head>
    <body>
        <div class="responsive">
                <?php include "header.php"; ?>
            <div class="homeback">  
              <?php 
                   $connect= mysqli_connect("localhost:3308","root","","budget") or die(mysqli_error($connect));
                   $select="select C_email from plans";
                    $query= mysqli_query($connect, $select);
                    $total_rows= mysqli_num_rows($query);
                    $Email=$_SESSION['Email'];                      
                      $select="select * from plans where C_email='$Email'";
                      $query= mysqli_query($connect, $select);
                      $total_rows= mysqli_num_rows($query);                    
                  for($i=0;$i<$total_rows;$i=$i+1)
                {
                    $plandetail= mysqli_fetch_array($query);
                    echo "<div class='plans'>
                    <div class='plan_head'>
                        <div class='plan_head1'>";
                        $Title=$plandetail['Title'];                        echo "$Title";
                        echo "</div>
                        <div class='plan_head2'>
                            <span class='glyphicon glyphicon-user'></span>";$person=$plandetail['NoPeople'];echo "    $person";
                        echo "</div>
                    </div>
                    <div class='plan_body'>                        
                        <div class='plan_heading'> Budget</div>
                        <div class='plan_result'> &#8377 ";$Initial=$plandetail['InitialBudget'];
echo "$Initial";echo "</div><br><br>
                        <div class='plan_heading'> Date</div>
                        <div class='plan_result'>"; 
                        $From=$plandetail['Froms'];$To=$plandetail['Tos'];echo "$From  -  $To"; 
                        echo "</div>                     
                    
                   
                    <a href='#'><button class=view_plan>View Plan</button></a>
                                                 
                   
                         </div>
                </div>";
                } }        
                 ?>
                <div class="plan_btn">
                    <a href="NewPlan.php"><span class='glyphicon glyphicon-plus-sign'></span></a>
                </div>
                
         </div>
            <?php  include "footer.php";
                 ?>
         </div>       
         </body>        
</html>