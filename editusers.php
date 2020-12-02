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
    
    $userarr = Array();
    
    $config = parse_ini_file('process/db.ini');                 // FOR LOCAL DEV
//      $config = parse_ini_file('/home/dev/db.ini');             // FOR SERVER DEPLOYED
    
    $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);
    
    if ($conn -> connect_error) {
        // ERROR - Failed to connect to MySQL instance (Wrong ini location / MySQL down)
        echo "!! Error creating DB connection >> ". $conn -> connect_error ." << !!";
    }
    else{
        // SQL query to select all the users
        $sql = "SELECT * FROM user";
        $result = $conn -> query($sql);
        $totalRows = $result->num_rows;
        if($totalRows > 0){
            //data of each row in server
            while($row = $result -> fetch_assoc()){
                $userarr[] = $row;
            }
        }
        else{
            echo "no user data found";
        }
        $result->close();
    }
    $conn->close();
    
    //print_r($userarr);
?>

<html>
    <header>
        <?php
            include "inc.head.php";
        ?>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

        
        <script>
        $(document).ready(function() {
            $('#usertable').DataTable();
        } );
        </script>
    </header>
    <div class="body">
        <?php 
            include "inc.nav.php";
        ?>
        <br>
        <div class="container-fluid">
            <table id="usertable" class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">User ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Handphone No.</th>
                        <th scope="col">Admin</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include "edituserrows.php"; ?>
                </tbody>
            </table>
        </div>
    </div>
</html>