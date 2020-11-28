<?php 
    include "../inc.sessionauth.php";
    include "../inc.head.php";
    include "../inc.nav.php";
    
    //initializing all the inputs to be POST-ed into the server
    $Edited_Email = $Edited_Fname = $Edited_Lname = $Edited_HPNum = $error_msg = "";
    $success = true;
    $UID = $_SESSION['UID'];
    
    //initializes all the variables in the Form
    //The form has all the values filled up by sessionauth if unchanged
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!empty($_POST['Edited_Email'])){
            $Edited_Email = sanitize_input($_POST['Edited_Email']);
            
            //Additional check to make sure e-mail address is well formed.
            if(!filter_var($Edited_Email, FILTER_VALIDATE_EMAIL))
            {
                $error_msg .= "Invalid email format. <br>";
                $success = false;
            }
        }
        else{
            $error_msg .= "Email required! <br>";
            $success = false;
        }
        if(!empty($_POST['Edited_Fname'])){
            $Edited_Fname = sanitize_input($_POST['Edited_Fname']);
        }
        else{
            $error_msg .= "First Name Required! <br>";
            $success = false;
        }
        if(!empty(($_POST['Edited_Lname']))){
            $Edited_Lname = sanitize_input($_POST['Edited_Lname']);
        }
        if(!empty(($_POST['Edited_HPNum']))){
            $Edited_HPNum = sanitize_input($_POST['Edited_HPNum']);
            
            //Additional check for phone number
            if($_POST['Edited_HPNum'] < 60000000 || $_POST['Edited_HPNum'] > 99999999){
                $error_msg .= "Invalid Phone Number <br>";
                $success = false;
            }
        }
        else{
            $error_msg .= "Handphone Number Required! <br>";
            $success = false;
        }
        
        
        if($success){
            updateMemberInDB();
        }
        if($success){
            include "proc.profileeditsucc_frag.php";
            
            //REINITIALIZE SESSION VARIABLES
            $_SESSION['Email'] = $Edited_Email;
            $_SESSION['Fname'] = $Edited_Fname;
            $_SESSION['Lname'] = $Edited_Lname;
            $_SESSION['HPNum'] = $Edited_HPNum;
        }
        else{
            include "proc.profileeditfail_frag.php";
        }
    }
    
    function updateMemberInDB(){
        global $Edited_Email, $Edited_Fname, $Edited_Lname, $Edited_HPNum, $error_msg, $success, $UID;
        
        $config = parse_ini_file('db.ini');                 // FOR LOCAL DEV
//      $config = parse_ini_file('/home/dev/db.ini');             // FOR SERVER DEPLOYED
        
        $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);
        
        if ($conn -> connect_error) {
            // ERROR - Failed to connect to MySQL instance (Wrong ini location / MySQL down)
            $error_msg = "!! Error creating DB connection >> ". $conn -> connect_error ." << !!";
        }
        else{
            // SQL Prepared statement
            $stmt = $conn -> prepare("UPDATE user "
                    . "SET Email = ?, Fname = ?, Lname = ?, HPNum = ? "
                    . "WHERE UID = " .$UID);
            
            //binding params
            $stmt -> bind_param('sssd', $Edited_Email, $Edited_Fname,
                    $Edited_Lname, $Edited_HPNum);
            if(!$stmt->execute()){
                $error_msg = "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
                $success = false;
                if($stmt->errno == 1062){
                    $error_msg = "The field(s) you have just changed have already been taken";
                }
                
                include "proc.profileeditfail_frag.php";
            }
            $stmt->close();
        }
        $conn->close();
        return 0;
    }
    
    //Sanitizing data fields
    function sanitize_input($data){
        //remove black spaces
        $data = trim($data);
        //removes slashes
        $data = stripslashes($data);
        //changes html special characters to html format i.e. @ into &alt
        $data = htmlspecialchars($data);
        return $data;
    }
?>


