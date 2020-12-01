<?php


    //
    //     Database/Data flow for signup to user table
    //
    //     Data Source                  |     MySQL Col   |       Type         |     Flags               |      Notes
    //     ------------------------------------------------------------------------------------------------------------------------------------------------------------
    //     N/A                          |      UID        |       INT          |     PK, NN, UQ, AI      |      Data is auto generated per user
    //     HTML FORM: Fname         ->  |      Fname      |       VARCHAR(45)  |     NN                  |      Data will be cleansed and added to DB
    //     HTML FORM: Lname         ->  |      Lname      |       VARCHAR(45)  |     N/A                 |      Data will be cleansed and added to DB
    //     HTML FORM: Email         ->  |      Email      |       VARCHAR(45)  |     NN, UQ              |      Data will be cleansed and added to DB
    //     HTML FORM: Password      ->  |      Pwd        |       VARCHAR(255) |     NN, UQ              |      Data will be hashed from original password and added to DB
    //     HTML FORM: Password_con      |      N/A        |       N/A          |     N/A                 |      Data will only be used to validated in PHP
    //     HTML FORM: HPNum         ->  |      HPNum      |       INT(8)       |     NN, UQ              |      Data will be cleansed and added to DB
    //     N/A                          |      IsAdmin    |       TINYINT(1)   |     N/A                 |      Data will be manually added in MySQL to signify admin

    // Hide PHP warnings/errors from being shown in HTML
    error_reporting(E_ERROR);

    /////////////////
    // Declaration //
    /////////////////
    $post_req = $_POST;
    $Fname = "";
    $Lname = "";
    $Email = "";
    $Password_raw = ""; // raw plain text
    $Password_con = ""; // raw plain text
    $Password = ""; // hashed
    $HPNum = 0;

    $status = false;
    $msg_error = "NO ERROR";



    ////////////////////////
    // Signup flow starts //
    ////////////////////////
    if (empty($post_req["signup_FirstName"]) ||
        empty($post_req["signup_LastName"]) ||
        empty($post_req["signup_Email"]) ||
        empty($post_req["signup_MobileNumber"]) ||
        empty($post_req["signup_Password"]) ||
        empty($post_req["signup_PasswordConfirm"])) {

        $msg_error = "!! Invalid form data !!";
    } else {
        // Sanitize Fname, Lname, HPNum
        $Fname = sanitize_input($post_req["signup_FirstName"]);
        $Lname = sanitize_input($post_req["signup_LastName"]);
        $HPNum = sanitize_input($post_req["signup_MobileNumber"]);
        // Sanitize Email
        list($Email, $msg_error) = verify_email($post_req["signup_Email"], $msg_error);
        // Sanitize Password
        $Password_raw = $post_req["signup_Password"];
        $Password_con = $post_req["signup_PasswordConfirm"];
        list($Password, $msg_error) = verify_password($Password, $Password_raw, $Password_con, $msg_error);

        // Add validated data to SQL
        list($msg_error, $status) = save_to_db($Fname, $Lname, $Email, $Password, $HPNum, $msg_error, $status);

        // Closing
        if ($status) {
            header("Location: ../login.php?err=0");
        } else {
            header("Location: ../signup.php?err=1");
        }
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



    //  Function  :     Ensure password confirmations match and hashing of valid password
    //
    //  Input     :     $Password   = Empty VAR for hashed password
    //                  $pwd_raw    = raw password from $post_req
    //                  $pwd_con    = raw password from $post_req
    //                  $msg_error  = global error string variable "NO ERROR"
    //
    //  Return    :     $Password   = validated and hashed password if valid
    //                  $msg_error  = should return "NO ERROR" unless error thrown
    function verify_password($Password, $pwd_raw, $pwd_con, $msg_error) {
        if ($pwd_con != $pwd_raw) {
            $msg_error = "!! Passwords do not match !!";
        } else {
            $Password = password_hash($pwd_raw, PASSWORD_DEFAULT);
        }
        return array($Password, $msg_error);
    }



    //  Function   :    Prepare SQL statement and insert valid information into MySQL for account creation
    //
    //  Input      :    $Fname      = Cleaned and validated Fname
    //                  $Lname      = Cleaned and validated Lname
    //                  $Email      = Cleaned and validated Email
    //                  $Password   = Validated and hashed Password
    //                  $HPNum      = Cleaned and validated HPNum
    //                  $msg_error  = global error string variable "NO ERROR"
    //                  $status     = global status bool "true"
    //
    //  Return     :    $msg_error  = should return "NO ERROR" unless error thrown
    //                  $status     = should return "true" unless error thrown
    function save_to_db($Fname, $Lname, $Email, $Password, $HPNum, $msg_error, $status) {
        

        // Read db access file from ini
        $config = parse_ini_file('db.ini');                 // FOR LOCAL DEV
        //$config = parse_ini_file('/home/dev/db.ini');             // FOR SERVER DEPLOYED

        $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);


        // Attempt connection to MySQL instance and start insertion flow
        if (mysqli_connect_errno()) {            // ERROR - Failed to connect to MySQL instance (Wrong ini location / MySQL down)
            header("Location: ../load_error.php");
        } else {
            //Type cast HPNum back to int for SQL
            $HPNum = (int)$HPNum;

            // SQL Prepared statement
            $stmt = $conn -> prepare("INSERT INTO user (Fname, Lname, Email, Pwd, HPNum) VALUES (?, ?, ?, ?, ?)");
            $res = $stmt -> bind_param('ssssi', $Fname, $Lname, $Email, $Password, $HPNum);

            //Execute SQL
            if (!$res = $stmt->execute()) {
                // ERROR - Failed to execute MySQL statement (Most common when duplicate entry)
                $msg_error = "!! stmt failed to execute >> ". $stmt -> error . " << !!!";
            } else {
                $stmt->close();
                $status = true;
            }
        }
        $conn -> close();

        return array($msg_error, $status);
    }
?>