<?php
include "../inc.sessionauth.php";


$config = parse_ini_file('db.ini');

$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

if(mysqli_connect_errno()){
    header("Location: ../load_error.php");
}
else {
    $deleteQuery = "DELETE FROM cat WHERE CID =" . $_GET['id'];
    $result = mysqli_query($conn, $deleteQuery);
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
            echo "<br>";
            if ($result){
                echo "<div class='container'>";
                echo "<div class='jumbotron'>";
                echo "<h2>Success!️</h2>";
                echo "<p>Delete cat record successfully!</p><br>";
                 echo "<hr class='my-4'>";
                echo "<a href='../index.php' class= 'btn btn-lg btn-success'>Home</a>";
                echo "</div>";
                        echo "</div>";
            }else{
                echo "Try again";
                echo "<a href='../editCat.php' class= 'btn btn-lg btn-success'>Delete record</a>";
            }
            mysqli_close($conn);
    
            include "../inc.footer.php";
        ?>
        </body>
    
     
    </main>