<?php

  include "../inc.sessionauth.php";


$config = parse_ini_file('db.ini');  

$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);





if(mysqli_connect_errno()){
    header("Location: ../load_error.php");
}
    else{
    $image = $_POST['cat_image'];
    $name = $_POST['cat_name'];
    $description = $_POST['cat_description'];
    $cattype = $_POST['cat_breed'];
    $age = $_POST['cat_age'];
   


    $updateQuery = "UPDATE `cat` SET Images = IF(LENGTH('$image')=0, Images, '$image'), CatName = IF(LENGTH('$name')=0, CatName, '$name'), Description = IF(LENGTH('$description')=0, Description, '$description'), CatType = IF(LENGTH('$cattype')=0, CatType, '$cattype'), Age = IF(LENGTH('$age')=0, Age, '$age') WHERE CID =" . $_GET['id'];
    $result = mysqli_query($conn, $updateQuery);
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
