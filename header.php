
<!--     HEADER FOR THE BUDGET WEBSITE         -->

<div class="header">
            <h1 class="logo">Ct&#8377| Budget</h1>
            <input type="checkbox" id="chk"/>
            <label for="chk" class="show-btn">
                <i class="glyphicon glyphicon-list"></i>
            </label>
            <ul class="menu">             
                <a href="about-us.php"><span class="glyphicon glyphicon-info-sign"></span> AboutUs</a>
               <?php
               if(isset($_SESSION['Email']))
               {
                 echo "<a href='changepassword.php'><span class='glyphicon glyphicon-cog'></span> Change Password</a>
                <a href='logout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a>";
                               }
               else
               {
                echo "<a href='signup.php'><span class='glyphicon glyphicon-user'></span> SignUp</a>
                <a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a>";
                }?>
                <label for="chk" class="hide-btn">
                 <i class="glyphicon glyphicon-remove"></i>
              
                 </label>
            </ul>
        </div>
