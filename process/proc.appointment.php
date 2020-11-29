<!DOCTYPE html>
<?php
    
    include "../inc.sessionauthless.php";


$config = parse_ini_file('db.ini');  

$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);





if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}else{
    $id = $_GET['id'];
    $date = date('Y-m-d H:i:s');
    $apptDate = date("c", strtotime($_POST['selecttime']));
    $user = $_SESSION['UID'];

  
    
    
    $insertQuery = "INSERT INTO `appointment` (currentDate, apptDate, status, CCID, UUID) VALUES('$date', '$apptDate', 'booked', '$id', '$user')";
    $updateQuery = "UPDATE `user` SET haveAppt='Yes' WHERE UID=$user";
    $updateQuery2 = "UPDATE `cat`, `appointment` SET cat.Adopted=$user WHERE cat.CID=appointment.CCID";
    $result = mysqli_query($conn,$insertQuery);
    $result2 = mysqli_query($conn, $updateQuery);
    $result3 = mysqli_query($conn, $updateQuery2);

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
            if ($result & $result2){
                echo "New record created successfully";
            } else if (!$result){
                echo "You have a previous booking." .  "<br>" . mysqli_error($conn);
            } else if (!$result2){
                echo "You have a previous booking." . "<br>" . mysqli_error($conn);
            } else{
                echo "You have a previous booking."  . "<br>" . mysqli_error($conn);
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

