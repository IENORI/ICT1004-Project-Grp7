<!--
    Process the buttons clicked from 
    editusers.php
        -editusersrow.php
-->

<?php
    include "../inc.sessionauth.php";
    
    //Additional Verification to verify if admin
    if(isset($_SESSION['SessionId'])){
        if($_SESSION['IsAdmin'] == 1){
            //do nothing
        }
        else{
            echo "Unauthorized Access.";
            exit();
        }
    }

    $UID = $_GET['UID'];
    $action = $_GET['action'];
    
    if($action == "delete"){
        $config = parse_ini_file('../process/db.ini');                 // FOR LOCAL DEV
//      $config = parse_ini_file('/home/dev/db.ini');             // FOR SERVER DEPLOYED
    
        $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);
    
        if ($conn -> connect_error) {
            // ERROR - Failed to connect to MySQL instance (Wrong ini location / MySQL down)
            echo "!! Error creating DB connection >> ". $conn -> connect_error ." << !!";
        }
        else{
            // SQL query to select all the users
            $sql = "DELETE FROM user WHERE UID=" . $UID;
            $conn -> query($sql);
            if($conn->affected_rows > 0){
                echo "Sucessfully Deleted.";
            }
            else{
                echo "Deletion unsuccessful";
            }
        }
        $conn->close();
    }
    else if ($action == "update"){
        echo "Have yet to be implemented";
    }

?>

<html>
    <header>
        <?php
            include "../inc.head.php";
        ?>
    </header>
    <div class="body">
        <?php 
            include "../inc.nav.php";
        ?>
    </div>
</html>