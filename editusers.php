<!--
    Admin function
    C R U D - user table
-->

<?php
    include "inc.sessionauth.php";
    
    //Additional Verification to verify if admin
    if(isset($_SESSION['SessionId'])){
        if($_SESSION['IsAdmin'] == 1){
            echo "Welcome back, Admin";
        }
        else{
            echo "Unauthorized Access.";
            exit();
        }
    }
    
    $error_msg = "";
    $userarr = Array(Array());
    
    $config = parse_ini_file('process/db.ini');                 // FOR LOCAL DEV
//      $config = parse_ini_file('/home/dev/db.ini');             // FOR SERVER DEPLOYED
    
    $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);
    
    if ($conn -> connect_error) {
        // ERROR - Failed to connect to MySQL instance (Wrong ini location / MySQL down)
        $error_msg = "!! Error creating DB connection >> ". $conn -> connect_error ." << !!";
    }
    else{
        // SQL query to select all the users
        $sql = "SELECT * FROM user";
        $result = $conn -> query($sql);
        $totalRows = $result->num_rows;
        if($totalRows > 0){
            //data of each row in server
            while($row = $result -> fetch_assoc()){
                $userarr[] = Array(
                        'UserID' => $row['UID'],
                        'UserFname' => $row['Fname'],
                        'UserLname' => $row['Lname'],
                        'UserEmail' => $row['Email'],
                        'UserHpNumber' => $row['HPNum']
                );
            }
        }
        else{
            echo "no user data found";
        }
        $result->close();
    }
    $conn->close();
    
    foreach ($userarr as $user){
        foreach($user as $key => $value){
            echo $key . " " . $value . "\n";
        }
    }
?>

<html>
    <header>
        <?php
            include "inc.head.php";
        ?>
    </header>
    <div class="body">
        <?php 
            include "inc.nav.php";
        ?>
        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">User ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">HP No.</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include "edituserstablerow.php"; ?>
                </tbody>
            </table>
        </div>
    </div>
</html>