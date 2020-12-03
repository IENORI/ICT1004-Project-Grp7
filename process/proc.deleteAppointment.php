<?php
    
    include "../inc.sessionauth.php";


$config = parse_ini_file('db.ini');  

$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);





if(mysqli_connect_errno()){
    header("Location: ../load_error.php");
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
                echo "<h2>Success!️</h2>";
                echo "<p>Delete appointment successfully!</p><br>";
                 echo "<hr class='my-4'>";
                echo "<a href='../index.php' class= 'btn btn-lg btn-success'>Home</a>";
                echo "</div>";
                        echo "</div>";
            }else{
                echo "Try again";
                echo "<a href='../deleteAppointment.php' class= 'btn btn-lg btn-success'>Delete appointment</a>";
            }
            mysqli_close($conn);
    
            include "../inc.footer.php";
        ?>
        </body>
    
     
    </main>
