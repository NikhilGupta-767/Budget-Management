<?php
session_start();

if(!isset($_SESSION['Email']))
{ die();
}?>
<!DOCTYPE html>
<!--
BUDGET WEBSITE
EXPENSE PAGE 
-->

<html>
    <head>
        <title>Ctrl Budget Website|EXPENSE</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css" > 
    </head>
    <body>
        <div class="responsive">
                <?php include "header.php"; 
               $connect= mysqli_connect("localhost:3308","root","","budget") or die(mysqli_error($connect));
                $select="select AMOUNT,REMAINING AMOUNT,PAID_ON from clients";
                $query= mysqli_query($connect, $select);
               ?>
            <div class="homeback">  
              <div class='plans lastplan'>
                    <div class='plan_head'>
                        <div class='plan_head1'>
                          Buying Apartment                     
                        </div>
                        <div class='plan_head2'>
                            <span class='glyphicon glyphicon-user'></span>2
                        </div>
                    </div>
                    <div class='plan_body lastB'>                        
                        <div class='plan_heading lastT'> Budget</div>
                        <div class='plan_result lastR'> &#8377 50000 
                        </div>
                        <div class='plan_heading lastT'> Remaining Amount</div>
                        <div class='plan_result lastR'> &#8377 35000 
                        </div>
                        <div class='plan_heading lastT'> Date</div>
                        <div class='plan_result lastR'> 
                        2020-05-13/2020-10-22   
                        </div>                                        
            </div>
              </div>
                <div class="exname">
                    Expense Distribution
                </div>
                <div class="form-bg formlast">          
            
                <form method="post" action="details.php">
                    <center class="form-txt-bg">
                <div class="plan-form-header">Add New Expense</div>
                <div class="form-content">
                    <div class="input-title">Title</div> 
                    <input type="text" id="initial-budget" class="inputs" placeholder="Expense Name" name="INITIAL-BUDGET" required><br>
                    <div class="input-title">Date</div>
                    <input type="date" id="group" class="inputs" placeholder="Date" name="GROUP" required="">
                    <div class="input-title">Amount Spent</div> 
                    <input type="number" id="initial-budget" class="inputs" placeholder="Amount Spent" name="INITIAL-BUDGET" required><br>
                    <div class="input-title">Paid By</div>
                    <input type="text" id="group" class="inputs" placeholder="Amount Paid By" name="GROUP" required="">
                    
                    <a href="Submit_page.php"><button type="submit" class="plan-next">ADD</button></a>
                </div>
                    </center>
                   
             </form>
                
        
    </div>
                <div class='plans last'>
                    <div class='plan_head'>
                        <div class='plan_head1'>
                          1st Payment                     
                        </div>                        
                    </div>
                    <div class='plan_body lastB'>                        
                        <div class='plan_heading lastT'> Amount</div>
                        <div class='plan_result lastR'> &#8377 15000 
                        </div>
                        <div class='plan_heading lastT'> Paid By</div>
                        <div class='plan_result lastR'> Arjun 
                        </div>
                        <div class='plan_heading lastT'> Paid On</div>
                        <div class='plan_result lastR'> 
                        2020-06-13   
                        </div>                                        
            </div>
              </div>
            </div>            
            <?php  include "footer.php";
                 ?>
         </div>       
         </body>        
</html>