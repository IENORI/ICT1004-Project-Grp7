<?php
include "inc.sessionauth.php";
?>
<?php
$config = parse_ini_file('process/db.ini');

$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);



if (mysqli_connect_errno()) {
    header("Location: ../load_error.php");
}else {
    $selectQuery = "SELECT * FROM `cat` WHERE `CID`=" . $_GET['id'];
    $result = mysqli_query($conn, $selectQuery);

    $row = mysqli_fetch_assoc($result);
    
    if (mysqli_num_rows($result) > 0) {
        
    } else {
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
                    <div class="container">
                    <div class="jumbotron">

                        <h3 class="selected">Cat selection:</h3>


                        <table>
                            <tbody>
                               

                                    <tr><img src="<?php echo $row['Images'] ?>" class="appointmentImage"></tr><br><br>

                                    <tr><b>Name: </b><?php echo $row['CatName']; ?></tr><br>

                                    <tr><b>Description: </b> <?php echo $row['Description']; ?></tr><br>

                                    <tr><b>Breed: </b><?php echo $row['CatType']; ?></tr><br>

                                    <tr><b>Age: </b><?php echo $row['Age']; ?></tr><br>
                                 <br>
                                        <br>

                            
                                    </tbody>
                                </table>
                        
                        
                        <h3 class="catlist">Edit cat</h3>
                        <form action="process/proc.editCat.php?id=<?php echo $row['CID']; ?>" method="post">
                            <div class="form-group">
                                <label for="cat_image">Image URL:</label>
                                <input type="text" class="form-control" id="cat_image" name="cat_image" placeholder="Enter image url">
                            </div>
                           <div class="form-group">
                            <div class="form-group">
                                <label for="cat_name">Cat Name:</label>
                                    <input type="text" class="form-control" id="cat_name" name="cat_name" placeholder="Enter Cat Name">
                            </div>
                            <div class="form-group">
                                    <label for="cat_description">Description:</label>
                                    <input type="text" class="form-control" id="cat_description" name="cat_description" placeholder="Enter Description">
                            </div>
                           <div class="form-group">
                               <div class="form-group">
                                    <label for="cat_breed">Cat Breed:</label>
                                    <input type="text" class="form-control" id="cat_breed" name="cat_breed" placeholder="Enter Cat Breed">
                            </div>
                                <div class="form-group">
                                    <label for="cat_age">Cat Age:</label>
                                    <input type="text" class="form-control" id="cat_age" name="cat_age" placeholder="Enter Age">
                            </div>
                           <div class="form-group">
                                    <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                               </form>
                            </div>
                        </div>
                        
                </main>
                <br>
                <?php
            
            include "inc.footer.php";
            ?>
        </div>
        <br>
    </body>
</html>


