<?php
include "inc.sessionauth.php";
?>
<?php

$config = parse_ini_file('process/db.ini');

$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);
$user = $UID;


if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}
else {
    
    $selectQuery = "SELECT cat.CID, cat.Images, cat.CatName, cat.Description, cat.CatType, cat.Age, appointment.apptDate FROM `cat`, `appointment`, `user`  WHERE cat.CID = appointment.CCID AND appointment.UUID = $UID";
    $selectQuery2 = "SELECT * FROM user WHERE user.UID IN (SELECT appointment.UUID FROM appointment)";
    $result = mysqli_query($conn,$selectQuery);
    $result2 = mysqli_query($conn,$selectQuery2);
   

    $row = mysqli_fetch_assoc($result);
    $row2 = mysqli_fetch_assoc($result2);
    
    
    if(mysqli_num_rows($result) > 0){
    }
    else{
        $msg = "No Record found";
    }
   
    
}
?>
<html lang="en">

    <head>
        <?php
            include "inc.head.php";
        ?>
    </head>
    <body>


        <div id="parent-wrapper" class="d-flex flex-column min-vh-100">
            <?php
                include "inc.nav.php";
            ?>
            <br>
            <?php
            ?>
            <div class="container">
                
                
                        <?php
                        if ($row2['UID'] != $UID){
                            echo "<div class='container'>";
                            echo "<div class='jumbotron'>";
                            echo "<h2>There is no appointment booked by you! Book yours now!</h2><br>";
                            echo "<a href='../adopt.php' class= 'btn btn-lg btn-success'>Book cat</a>";
                            echo "</div>";
                        echo "</div>";
                        }
                         else{
                                
                            ?>
                            <div class="container">
                            <div class="jumbotron">
                            <h3 class="selected">Cat selection:</h3>
                            <table>
                            <tbody> 
                                <form action="process/proc.editAppointment.php?id=<?php echo $row['CID']; ?>" method="post">
                                <tr><img src="<?php echo $row['Images']?>" class="appointmentImage"></tr><br><br>
                                <tr><b>Name: </b><?php echo $row['CatName']; ?></tr><br>
                                <tr><b>Description: </b> <?php echo $row['Description']; ?></tr><br>
                                <tr><b>Breed: </b><?php echo $row['CatType']; ?></tr><br>
                            <tr><b>Age: </b><?php echo $row['Age']; ?></tr><br>
                            <tr><b>Date: </b><?php echo $row['apptDate']; ?></tr><br>

                                <tr><label for="selecttime"><b>Select new Date and Time of appointment:</b></label><br>
                                <input type="datetime-local"  id="selecttime" name="selecttime" REQUIRED></tr>
                                <br>
                                <br>
                                <td><button type="submit" class="btn btn-primary" name="appointmentnext" value="appointmentnext">Confirm edit appointment</button></td>
                                <td><a href='deleteAppointment.php' button='submit' id="deleteAppt" class='btn btn-primary' name='appointmentnext' value='appointmentnext'>Delete appointment</a></td>
                                </form>
                           </tbody>
                        </table>
                            </div><?php
                         echo"</div>";}?>
                         
                        
                        
                    
                    <br>
                    <br>

            </div>
           
    
    
    
    
    
    <?php
            include "inc.footer.php";
        ?>
        </body>
    
    
    
    
    
    
    
</main>

