
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
    $apptDate2 = date("c", strtotime($_POST['selecttime']));
    $user = $_SESSION['UID'];


    $updateQuery = "UPDATE `appointment` SET apptDate='$apptDate2' WHERE UUID = $UID";
    $result = mysqli_query($conn, $updateQuery);

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
            if ($result){
                echo "<div class='container'>";
                echo "<div class='jumbotron'>";
                echo "<h2>Success!</h2>";
                echo "<p>Booking edited successfully!</p><br>";
                echo "<hr class='my-4'>";
                echo "<a href='../index.php' class= 'btn btn-lg btn-success'>Home</a>";
                echo "</div>";
                        echo "</div>";
            }else{
                echo "Try again";
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