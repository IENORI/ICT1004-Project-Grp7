<!--
    LOGIN.PHP HAS 2 DIFFERENT FUNCTIONS:
    # IF THERE IS AN AVAILABLE SESSION(USER LOGGED ON) 
        THEN IT WILL REDIRECT TO PROFILE.PHP
    # IF NO AVAILABLE SESSION, THEN IT WILL DISPLAY LOGIN PAGE
        THEN IT WILL DISPLAY LOGIN_FRAG.PHP
-->

<?php
    include "inc.head.php";
    
    session_start();
    //If session found
    if(isset($_SESSION['SessionId'])){
        //echo "SESSION EXIST";
        /*//used for debugging
            session_destroy();
            session_unset();
         */
         
        
        include("profile.php");
    }
    else{
        //echo "SESSION NOT FOUND";
        include("login_frag.php");
    }
?>
