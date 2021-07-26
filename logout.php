<!--    BUDGET WEBSITE
LOGS USER OUT AND DESTROYS THE THE SESSION AND VARIABLES 
        SENDING WINDOW TO INDEX PAGE-->

<?php
session_unset();
session_destroy();
echo "<script> window.location.href='index.php'</script>";