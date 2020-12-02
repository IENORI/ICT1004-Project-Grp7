<?php
    
    include "../inc.sessionauth.php";


$config = parse_ini_file('db.ini');  

$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);





if(mysqli_connect_errno()){
    echo "<br><h4>You are not connected to the server</br></h4>";
    exit();
}
    else{
    $id = $_GET['id'];
    $date = date('Y-m-d H:i:s');
    
    $user = $_SESSION['UID'];


    $deleteQuery = "DELETE FROM appointment WHERE UUID = $UID";
    $updateQuery = "UPDATE user SET haveAppt = 'No' WHERE UID = $UID";
    $result = mysqli_query($conn, $deleteQuery);
    $result2 = mysqli_query($conn, $updateQuery);
    }
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
            if ($result && $result2){
                echo "<div class='container'>";
                echo "<div class='jumbotron'>";
                echo "<h2>Delete appointment successfully!</h2><br>";
                echo "<a href='../index.php' class= 'btn btn-lg btn-success'>Home</a>";
                echo "</div>";
                        echo "</div>";
            }else{
                echo "Try again";
                echo "<a href='../index.php' class= 'btn btn-lg btn-success'>deleteAppointment.php</a>";
            }
            mysqli_close($conn);
    
            include "../inc.footer.php";
        ?>
        </body>
    
     
    </main>
