 <?php
 session_start();
 
 //        ENTRING THE NEW PLANS DATA IN THE DATABASE NAME PLANS AND TRANSFERING THE WINDOW TO HOME PAGE
   
 
                $connect= mysqli_connect("localhost:3308","root","","budget") or die(mysqli_error($connect));
                $Email=$_SESSION['Email'];
                $Title= mysqli_real_escape_string($connect,filter_input(INPUT_POST, 'TITLE'));                
                $From= filter_input(INPUT_POST, 'FROM');
                $To=filter_input(INPUT_POST, 'TO');
                $Initial=$_SESSION['initial'];
                $Nopeople=$_SESSION['group'];                
                $select="select Title from plans";
                $query= mysqli_query($connect, $select);
                $total_rows= mysqli_num_rows($query);
                $check=1;
                 for($i=0;$i<=$total_rows;$i=$i+1)
                    {   $rows= mysqli_fetch_array($query);                               /*  CHECKING FOR ALREADY TAKEN TITLE    */
                       if($Title==$rows['Title'])
                    {
                        echo "Title already taken";
                        $check=5;
                    }}
                    if($check==1)
                    {
                $input="insert into plans values('$Email','$Title','$From','$To','$Initial','$Nopeople')";
                $submit= mysqli_query($connect,$input)or die(mysqli_error($connect));
                for($i=1;$i<=$Nopeople;$i=$i+1)
                    {
                        $person= filter_input(INPUT_POST, "PERSON$i");           
                       $input="insert into people values('$Title','$person')";
                   $submit= mysqli_query($connect,$input)or die(mysqli_error($connect));
                    
                   }
                   }
                    ?>
               
                 <script>
                window.location.href='home.php';
                </script>";                
                    } 