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


    //
    // Declaration
    //
    $post_req = $_POST;
    $Fname = "";
    $Lname = "";
    $Email = "";
    $Password_raw = ""; // raw plain text
    $Password = ""; // hashed
    $Password_con = ""; // raw plain text
    $HPNum = 0;

    $status = false;
    $msg_error = "NULL ERROR";


    //
    // Signup flow starts
    //
    if (empty($post_req["signup_FirstName"]) ||
        empty($post_req["signup_LastName"]) ||
        empty($post_req["signup_Email"]) ||
        empty($post_req["signup_MobileNumber"]) ||
        empty($post_req["signup_Password"]) ||
        empty($post_req["signup_PasswordConfirm"])) {

        $msg_error = "!! Invalid form data !!";
        echo $msg_error;
        $status = false;

    } else {
        $Fname = sanitize_input($post_req["signup_FirstName"]);
        $Lname = sanitize_input($post_req["signup_LastName"]);
        $HPNum = sanitize_input($post_req["signup_MobileNumber"]);

        list($Email, $msg_error, $status) = verify_email($post_req["signup_Email"], $msg_error, $status);

        $Password_raw = $post_req["signup_Password"];
        $Password_con = $post_req["signup_PasswordConfirm"];
        list($Password, $msg_error, $status) = verify_password($Password, $Password_raw, $Password_con, $msg_error, $status);

        save_to_db($Fname, $Lname, $Email, $Password, $HPNum, $msg_error, $status);
    }


    //
    // Functions
    //
    function sanitize_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function verify_email($Email, $msg_error, $status) {
        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
            $msg_error = "!! Email format is invalid !!";
            echo $msg_error;
            $status = false;
        } else {
            $Email = sanitize_input($Email);
        }
        return array($Email, $msg_error, $status);
    }

    function verify_password($Password, $pwd_raw, $pwd_con, $msg_error, $status) {
        if ($pwd_con != $pwd_raw) {
            $msg_error = "!! Passwords do not match !!";
            echo $msg_error;
            $status = false;
        } else {
            $Password = password_hash($pwd_raw, PASSWORD_DEFAULT);
        }
        return array($Password, $msg_error, $status);
    }

    function save_to_db($Fname, $Lname, $Email, $Password, $HPNum, $msg_error, $status) {
        //Read db access file from ini
//        $config = parse_ini_file('db.ini');
        $config = parse_ini_file('/home/dev/db.ini');
        $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

        if ($conn -> connect_error) {
            $msg_error = "!! Error creating DB connection >> ". $conn -> connect_error ." << !!";
            $status = false;
        } else {
            //Type cast HPNum back to int for SQL
            $HPNum = (int)$HPNum;

            //SQL Prepared statement
            $stmt = $conn -> prepare("INSERT INTO user (Fname, Lname, Email, Pwd, HPNum) VALUES (?, ?, ?, ?, ?)");
            $res = $stmt -> bind_param('ssssi', $Fname, $Lname, $Email, $Password, $HPNum);

            //Execute SQL
            if (!$res = $stmt->execute()) {
                $msg_error = "!! stmt failed to execute >> ". $stmt -> error . " << !!!";
                $status = false;
            }
            $status = true;
            $stmt -> close();
        }
        $conn -> close();

        return 0;
    }
?>