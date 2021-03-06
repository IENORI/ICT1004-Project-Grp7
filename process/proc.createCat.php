<?php
include "../inc.sessionauth.php";

$config = parse_ini_file('db.ini');

$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

$image = sanitize_input($_POST['cat_image']);
$name = sanitize_input($_POST['cat_name']);
$description = sanitize_input($_POST['cat_description']);
$cattype = sanitize_input($_POST['cat_breed']);
$age = sanitize_input($_POST['cat_age']);

//Helper function that checks input for malicious or unwanted content. 
function sanitize_input($data) 
{   
    $data = trim($data);   
    $data = stripslashes($data);   
    $data = htmlspecialchars($data);   
    return $data; 
    
} 

if (mysqli_connect_errno()) {
    header("Location: ../load_error.php");
} else{
    $insertQuery = "INSERT INTO cat (Images, catName, Description, CatType, Age) VALUES ('$image', '$name', '$description', '$cattype',
        '$age')";
    $result = mysqli_query($conn, $insertQuery);
  
    
}
?>
<html lang="en">

        <head>
            <?php
            include "../inc.head.php";
            ?>
        </head>
        <body>


            <div id="parent-wrapper" class="d-flex flex-column min-vh-100">
                <?php
                include "../inc.nav.php";
                ?>
                <br>
                
                <div class="container">
                    <div class="jumbotron">
                        <?php if ($result){
                                echo "<h2>Success!</h2>";
                                echo "<p>Cat record created successfully!</p><br>";
                                echo "<hr class='my-4'>";
                                echo "<a href='../index.php' class= 'btn btn-lg btn-success'>Home</a>";
                                }?>
                    </div>
                </div>

            </div>
        </body>
</html>
