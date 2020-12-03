<?php

include "inc.sessionauth.php";

$config = parse_ini_file('process/db.ini');

$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

if (mysqli_connect_errno()) {
    header("Location: ../load_error.php");
}
//<<<<<<< Updated upstream
//=======
//>>>>>>> Stashed changes
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
                
                <div class="container">
                    <div class="jumbotron">
                        <h3 class="catlist">Add cat</h3>
                        <form action="process/proc.createCat.php" method="post">
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
                    </div>
                </body>
                </html>
                      

                                 