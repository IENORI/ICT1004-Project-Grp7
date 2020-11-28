<?php

include "inc.sessionauthless.php";

$config = parse_ini_file('process/db.ini');  

$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);



if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}
else {
    $selectQuery = "SELECT * FROM `cat` WHERE `CID` =".$_GET['id'];
    $result = mysqli_query($conn,$selectQuery);
    $row = mysqli_fetch_assoc($result);
    
    if(mysqli_num_rows($result) > 0){
    }
    else{
        $msg = "No Record found";
    }
}


?>

<!--
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 *-->

<html lang="en">
    
    <head>
        <?php
            include "inc.head.php";
        ?>
    </head>
    <body>

        <?php
            include "inc.nav.php";
            ?>
            <div class="container-fluid">
                <?php
             if(!isset($_SESSION['UID'])) {
                echo "<br><br><h3 class='selected'>Please login before booking an appointment.</h4><br>";
                echo "<a href='login.php' class= 'btn btn-danger'>Login</a><br><br></div>";
                
                } else {
                ?>
            
      
        <br>
        <main class="container">
        <h3 class="selected">Cat selection:</h3>
        
        <table>
                    <tbody>
                        <form action="process/proc.appointment.php?id=<?php echo $row['CID']; ?>" method="post">
                        <tr><img src="<?php echo $row['Images']?>" class="appointmentImage"></tr><br><br>
                    
                        <tr><b>Name: </b><?php echo $row['CatName']; ?></tr><br>
                        <tr><b>Description: </b> <?php echo $row['Description']; ?></tr><br>
                        <tr><b>Breed: </b><?php echo $row['CatType']; ?></tr><br>
                       <tr><b>Age: </b><?php echo $row['Age']; ?></tr><br>
                                                                                              
                        <tr><label for="selecttime"><b>Select Date and Time of appointment:</b></label><br>
                        <input type="datetime-local"  id="selecttime" name="selecttime" REQUIRED></tr>
                       
                        <br>
                        <br>
                        <td><button type="submit" class="btn btn-primary" name="appointmentnext" value="appointmentnext">
                                Confirm book appointment</button></td>
                        </form>
                       
                     
                      
                    </tbody>
                </table>
        <br>
                
        </main>
        <?php
                }
        include "inc.footer.php";
                     
                  
               
        ?>
    </body>
</html>
