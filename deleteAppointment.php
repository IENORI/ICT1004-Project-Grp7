<?php

include "inc.sessionauth.php";
?>
<?php

$config = parse_ini_file('process/db.ini');

$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);
$user = (isset($_SESSION['UID']));


if(mysqli_connect_errno()){
    header("Location: ../load_error.php");
}
else {
    
    $selectQuery = "SELECT cat.CID, cat.Images, cat.CatName, cat.Description, cat.CatType, cat.Age, appointment.apptDate FROM `cat`, `appointment`, `user`  WHERE cat.CID = appointment.CCID AND appointment.UUID = $UID";
    
    $result = mysqli_query($conn,$selectQuery);
   

    $row = mysqli_fetch_assoc($result);
    
    
    
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
               <div class="jumbotron">
                <h3 class="selected">Cat selection:</h3>
                
                        <?php
                        
                        if ($UID){
                          
                            
                            ?>
                            <table>
                            <tbody> 
                                <form action="process/proc.deleteAppointment.php?id=<?php echo $row['CID']; ?>" method="post">
                                <tr><img src="<?php echo $row['Images']?>" class="appointmentImage"></tr><br><br>
                                <tr><b>Name: </b><?php echo $row['CatName']; ?></tr><br>
                                <tr><b>Description: </b> <?php echo $row['Description']; ?></tr><br>
                                <tr><b>Breed: </b><?php echo $row['CatType']; ?></tr><br>
                            <tr><b>Age: </b><?php echo $row['Age']; ?></tr><br>
                            <tr><b>Date: </b><?php echo $row['apptDate']; ?></tr><br>
                                <br>
                                <td><button type="submit" class="btn btn-primary" name="appointmentnext" value="appointmentnext">Confirm delete appointment</button></td>
                                
                           </form>
                            <td><a href="editAppointment.php" type="submit" id="deleteAppt" class="btn btn-danger" name="appointmentnext" value="appointmentnext">Back</a></td>
                        </tbody><?php echo
                        "</table>";}?>
               </div>
            </div>
             <?php
            include "inc.footer.php";
        ?>
        </body>
    
    
    
    
    
    
    
</main>