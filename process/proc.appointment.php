<!DOCTYPE html>
<?php
    
    include "../inc.sessionauthless.php";


$config = parse_ini_file('db.ini');  

$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);





if(mysqli_connect_errno()){
    echo "<br><h4>You are not connected to the server</br></h4>";
    exit();
}else{
    $id = $_GET['id'];
    $date = date('Y-m-d H:i:s');
    $apptDate = date("c", strtotime($_POST['selecttime']));
    $user = $_SESSION['UID'];

  
    
    
    $insertQuery = "INSERT INTO `appointment` (currentDate, apptDate, status, CCID, UUID) VALUES('$date', '$apptDate', 'booked', '$id', '$user')";
    $updateQuery = "UPDATE `user` SET haveAppt='Yes' WHERE UID=$user";
    $result = mysqli_query($conn,$insertQuery);
    $result2 = mysqli_query($conn, $updateQuery);

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
            } else if (!$result){
                echo "<br>";
                echo "<div class='container'>";
                echo "<div class='jumbotron'>";
                echo "<h2>Thank you for your interest however the current cat is currently booked by other members. Thank you for your "
                . "kind understanding! </h2>"
                 .  "<br>" . mysqli_error($conn);
                echo "<a href='../adopt.php' class= 'btn btn-lg btn-danger'>Back</a>";
                echo "</div>";
                        echo "</div>";
            } else{
                echo "<br>";
                echo "<div class='container'>";
                echo "<div class='jumbotron'>";
                echo "<h2>There is a previous booking for this cat!</h2>"
                 .  "<br>" . mysqli_error($conn);
                echo "<a href='../adopt.php' class= 'btn btn-lg btn-danger'>Back</a>";
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

