<!DOCTYPE html>
<?php
    
    include "../inc.sessionauthless.php";


$config = parse_ini_file('db.ini');  

$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);





if(mysqli_connect_errno()){
    header("Location: ../load_error.php");
}else{
    $id = $_GET['id'];
    $date = date('Y-m-d H:i:s');
    $apptDate = date("c", strtotime($_POST['selecttime']));
    $user = $_SESSION['UID'];

  
    
    
    $insertQuery = "INSERT INTO `appointment` (currentDate, apptDate, status, CCID, UUID) VALUES('$date', '$apptDate', 'booked', '$id', '$user')";
    $updateQuery = "UPDATE `user` SET haveAppt='Yes' WHERE UID=$user";
    $selectQuery = "SELECT * FROM user WHERE user.UID IN (SELECT appointment.UUID FROM appointment WHERE appointment.CCID IN (SELECT cat.CID FROM cat))";
   
    $result = mysqli_query($conn,$insertQuery);
    $result2 = mysqli_query($conn, $updateQuery);
    $result3 = mysqli_query($conn, $selectQuery);
    
    
    $row = mysqli_fetch_assoc($result3);
    

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
                echo "<br>";
                echo "<div class='container'>";
                echo "<div class='jumbotron'>";
                echo "<h2>Successful booked! All there is to do now is to come to the appointment on time!</h2><br>";
                echo "<a href='../index.php' class= 'btn btn-lg btn-success'>Home</a>";
                echo "</div>";
                        echo "</div>";
//<<<<<<< Updated upstream
            } 
            else {
//>>>>>>> Stashed changes
                echo "<div class='container'>";
                echo "<div class='jumbotron'>";
                echo "<h2>Whoops!️</h2>";
                echo "<p>Cat booking exists</p>"
                 .  "<br>" . mysqli_error($conn);
                 echo "<hr class='my-4'>";
                echo "<a href='../editAppointment.php'  class= 'btn btn-lg btn-success'>Check for existing appointment</a>";
                echo "<a href='../adopt.php' id='backAppt' class='btn btn-lg btn-danger'>Back</a>";
                echo "</div>";
                        echo "</div>";
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

