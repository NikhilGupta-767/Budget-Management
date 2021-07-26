<?php
 session_start();
 
 //     BUDGET WEBSITE
 //     UPDATES THE PASSWORD OF THE CURRENT USER IN THE DATABASE 
 //     WHILE MATCHING THE OLD PASSWORD ENTERED MATCHES WITH THE EARLIER PASSWORD IN THE DATABASE 
 //     TRANFERING WINDOW TO INDEX PAGE WHILE STARTING THE SESSION WITH EMAIL
 
 
                $connect= mysqli_connect("localhost:3308","root","","budget") or die(mysqli_error($connect));
                $Oldpassword= md5(filter_input(INPUT_POST, 'OLDPASSWORD'));
                $Newpassword= md5(filter_input(INPUT_POST, 'NEWPASSWORD'));
                $Repassword= md5(filter_input(INPUT_POST, 'REPASSWORD'));
                $Email=$_SESSION['Email'];
                $select="select Password from clients where Email='$Email'";
                $query= mysqli_query($connect, $select);
                $rows= mysqli_fetch_array($query);
                if($Oldpassword!=$rows['Password'])
                {
                    echo 'ENTERED WRONG OLD PASSWORD';
                    die();
                }
                elseif (preg_match(".{6,}",$Password)) 
                        {
                    echo 'NEW PASSWORD MUST BE ATLEAST OF 6 DIGITS';
                    die();
                    }
                    elseif($Newpassword!=$Repassword)
                    {
                        echo "RE-ENTERED PASSWORD DOESN'T MATCH";
                    }
                    else
                    {
                $input="update clients set Password='$Newpassword' where Email='$Email'";
                $submit= mysqli_query($connect,$input)or die(mysqli_error($connect));
                echo "<script>
                window.location.href='index.php';
                </script>";  
                    }
             