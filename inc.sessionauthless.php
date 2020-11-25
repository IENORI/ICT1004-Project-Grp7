<?php
    /* SESSION AUTHENTICATOR-LESS
     * 
     * IF 
     * THE USER IS LOGGED ON THEN IT WILL 
     * INITIALIZES RESPECTIVE VARIABLES
     * 
     * ELSE
     * THE CURRENT USER CAN STILL BROWSE FREELY
     */

    /*
     * Checks for existing session if no started session then start one 
     * Session does not carry over from proc.login.php
     * But will resume to the same session when started again.
    */
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    /*
     * Initializing variables from logged on session
     * if undefined, there's a chance it is unintended access 
     *   i.e. simply accessing /profile.php
     * or that some variables failed to initialize
     *   suggest to check proc.login.php line 148 onwards
     */
    //initializing session variables
    if(isset($_SESSION['UID'])){
        $UID = $_SESSION['UID'];
        $Email = $_SESSION['Email'];
        $Fname = $_SESSION['Fname'];
        $Lname = $_SESSION['Lname'];
        $HPNum = $_SESSION['HPNum'];
        $IsAdmin = $_SESSION['IsAdmin'];
    }
    else{
        $UID = "";
        $Email = "";
        $Fname = "";
        $Lname = "";
        $HPNum = "";
        $IsAdmin = "";
    }
?>

