<?php
include "inc.sessionauthless.php";
?>
<?php

$config = parse_ini_file('process/db.ini');

$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

$user = (!isset($_SESSION['UID']));

if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}
else {
    $selectQuery = "SELECT * FROM `appointment` WHERE `AAID` =".$_GET['id'];
    $result = mysqli_query($conn,$selectQuery);

    $row = mysqli_fetch_assoc($result);
}
?>
<main>
    
    
    
    
    
    
    
    
    
    
    
    
    
</main>

