<?php
    // Hide PHP warnings/errors from being shown in HTML
//    error_reporting(E_ERROR);

    /////////////////
    // Declaration //
    /////////////////
    $post_req = $_POST;

    $Email = "";
    $Password_raw = ""; // raw plain text

    $status = false;
    $msg_error = "NO ERROR";



    ///////////////////////
    // Login flow starts //
    ///////////////////////
    if (empty($post_req["login_Email"]) ||
        empty($post_req["login_Password"])) {

        $msg_error = "!! Invalid login data !!";
    } else {
        // Sanitize Email
        $Email = sanitize_input($post_req["login_Email"]);
        $Password_raw = $post_req["login_Password"];
        retrieve_from_db($Email, $Password_raw, $msg_error, $status);
    }



    ///////////////
    // Functions //
    ///////////////
    //  Function    :   Sanitize any input and remove unwanted/malicious characters
    //
    //  Input       :   $data = single data int/string
    //
    //  Return      :   $data = cleansed data
    function sanitize_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }



    //  Function   :    Match email with built in PHP email format validator
    //
    //  Input      :    $Email      = email from $post_req
    //                  $msg_error  = global error string variable "NO ERROR"
    //
    //  Return     :    $Email      = validated and cleansed email if valid
    //                  $msg_error  = should return "NO ERROR" unless error thrown
    function verify_email($Email, $msg_error) {
        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
            $msg_error = "!! Email format is invalid !!";
        } else {
            $Email = sanitize_input($Email);
        }
        return array($Email, $msg_error);
    }



    //  Function  :     Check if password matches
    //
    //  Input     :     $pwd_db     = Hashed password from DB
    //                  $pwd_raw    = raw password from $post_req
    //                  $msg_error  = global error string variable "NO ERROR"
    //
    //  Return    :     $Password   = validated and hashed password if valid
    //                  $msg_error  = should return "NO ERROR" unless error thrown
    function verify_password($pwd_db, $pwd_raw, $msg_error) {

        if (!password_verify($pwd_raw, $pwd_db)){
            $errorMsg = "Email not found or password does not match.";
        }

        return array($pwd_db, $msg_error);
    }



    //  Function   :    Prepare SQL statement to search MySQL for login
    //
    //  Input      :    $Email          = Cleaned and validated Email
    //                  $Password_raw   = Validated and hashed Password
    //                  $msg_error      = global error string variable "NO ERROR"
    //                  $status         = global status bool "true"
    //
    //  Return     :    $msg_error      = should return "NO ERROR" unless error thrown
    //                  $status         = should return "true" unless error thrown
    function retrieve_from_db($Email, $Password_Raw, $msg_error, $status) {

        // Read db access file from ini
        $config = parse_ini_file('db.ini');                 // FOR LOCAL DEV
    //        $config = parse_ini_file('/home/dev/db.ini');             // FOR SERVER DEPLOYED

        $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);


        // Attempt connection to MySQL instance and start insertion flow
        if ($conn -> connect_error) {
            // ERROR - Failed to connect to MySQL instance (Wrong ini location / MySQL down)
            $msg_error = "!! Error creating DB connection >> ". $conn -> connect_error ." << !!";
        } else {

            // SQL Prepared statement
            $stmt = $conn -> prepare("SELECT * FROM user WHERE Email = ?");
            $res = $stmt -> bind_param('s', $Email);

            //Execute SQL
            if (!$res = $stmt -> execute()) {
                // ERROR - Failed to execute MySQL statement (Most common when duplicate entry)
                $msg_error = "!! stmt failed to execute >> ". $stmt -> error . " << !!!";
            } else {
                // Fetch row regardless if empty
                $res = $stmt -> get_result();
                $row = $res->fetch_assoc();
                if (empty($row)) {
                    // ERROR - Checks if row is "empty" and throws error (Email not found)
                    $msg_error = "!! Email not found or password does not match !!";
                    echo "!!! email wrong !!!";
                } else {
                    // Retrieve hashed password from DB
                    $Password_Hashed_DB = $row["Pwd"];
                    // Check if hashed and raw matches
                    if (!password_verify($Password_Raw, $Password_Hashed_DB)) {
                        // ERROR - Throws error if password does not match DB
                        $msg_error = "!! Email not found or password does not match !!";
                        echo "!!! pwd wrong !!!";
                    } else {
                        $Email = $row["Email"];
                        $Fname = $row["Fname"];
                        $IsAdmin = $row["IsAdmin"];
                        echo "Yes";                     //  <<-- Stopped here, fetch email & password with appropriate flows (echo)
                        
                        session_start();
                        $_SESSION['email'] = $Email;
                        echo '<br> the session id is:';
                        echo session_id();
                    }

                    $stmt->close();
                    $status = true;
                }
            }
        }
        $conn -> close();

        return array($msg_error, $status);
    }
?>
