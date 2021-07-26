<?php
session_start();

//              CHECKING THE ENTERED EMAIL AND PASSWORD WITH CLIENTS DATABASE ANF GENERATING SESSION WITH USER EMAIL 
//              AND TRANSFERING WINDOW TO HOME PAGE

                  
                    $mail=filter_input(INPUT_POST, 'EMAIL');
                    $Pass=md5(filter_input(INPUT_POST, 'PASSWORD'));
                    $connect= mysqli_connect("localhost:3308","root","","budget") or die(mysqli_error($connect));
                    $select="select Email,Password from clients";
                    $query= mysqli_query($connect, $select);
                    $total_rows= mysqli_num_rows($query);
                    $check=5;
                    for($i=1;$i<=$total_rows;$i=$i+1)
                    {  
                       $rows= mysqli_fetch_array($query);
                        if($rows['Email']==$mail && $rows['Password']==$Pass)
                        {
                            $_SESSION['Email']=$mail;
                            $check=1;
                            echo "<script> window.location.href='home.php'</script>";
                            
                        }
                    }
                    if($check==5)
                    {
                        echo "<div class='error'> Email or Password is wrong</div>";
                        session_destroy();
                    }
                    