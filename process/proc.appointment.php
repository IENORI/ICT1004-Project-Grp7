<!DOCTYPE html>
<?php
    include "../inc.sessionauthless.php";
?>
<?php
$config = parse_ini_file('db.ini');  

$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);





if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}else{
    $id = $_GET['id'];
    $date = date('Y-m-d H:i:s');
    $apptDate = date("c", strtotime($_POST['selecttime']));
    
  
    
    
    $insertQuery = "INSERT INTO `appointment` (currentDate, apptDate, status, CCID) VALUES('$date', '$apptDate', 'booked', '$id')";
    $result = mysqli_query($conn,$insertQuery);
?>
<html lang="en">
    <head>
        <?php
            include "../inc.head.php";
        ?>
    </head>
    <body>

        <?php
            include "../inc.nav.php";
            if ($result) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $result . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
            }
        ?>
        
        <!--
        -
        Page content
        -
        -->
         <?php
            include "../inc.footer.php";
        ?>
    </body>
</html>

