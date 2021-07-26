 <?php
 session_start();
 
 //     BUDGET WEBSITE
 //     REGISTERS THE USER INFO IN THE DATABASE CLIENTS WHILE CKECKING THE REQUIRED PATTERN
 //     TRANFERING WINDOW TO HOME PAGE WHILE STARTING THE SESSION WITH EMAIL
 
 
                $connect= mysqli_connect("localhost:3308","root","","budget") or die(mysqli_error($connect));
                $Name= mysqli_real_escape_string($connect,filter_input(INPUT_POST, 'NAME'));
                $Email= strtolower(filter_input(INPUT_POST, 'EMAIL'));
                $Password= md5(filter_input(INPUT_POST, 'PASSWORD'));
                $PNumber= strval(filter_input(INPUT_POST, 'PNUMBER'));
                $select="select Email from clients";
                $query= mysqli_query($connect, $select);
                $total_rows= mysqli_num_rows($query);
                $check=1;
                 for($i=0;$i<=$total_rows;$i=$i+1)
                    {   $rows= mysqli_fetch_array($query);
                       if($Email==$rows['Email'])
                    {
                        echo "Email already taken";
                        $check=5;
                    }}
                    if($check==1)
                    {
             if(!preg_match(".{6,}",$Password) && !preg_match(".[0-9]{9,9}",$PNumber))
                { 
                $input="insert into clients(Name,Email,Password,PhoneNumber)values('$Name','$Email','$Password','$PNumber')";
                $submit= mysqli_query($connect,$input)or die(mysqli_error($connect));
                $_SESSION['Email']=$Email;
                echo "<script>
                window.location.href='home.php';
                </script>";                
                    } }