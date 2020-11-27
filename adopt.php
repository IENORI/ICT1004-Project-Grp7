<?php
include "inc.sessionauthless.php";
?>
<?php
$host = "127.0.0.1"; //IP of your database
$userName = "sqldev"; //Username for database login
$userPass = "ict1004grp7"; //Password associated with the username
$database = "adoptcatsg"; //Your database name

$connectQuery = mysqli_connect($host, $userName, $userPass, $database);

if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
} else {
    $selectQuery = "SELECT * FROM `cat` ORDER BY `CID` ASC";
    $result = mysqli_query($connectQuery, $selectQuery);
    if (mysqli_num_rows($result) > 0) {
        
    } else {
        $msg = "No Record found";
    }
}
?>
<!DOCTYPE html>
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

        <!--
        -
        Page content
        -
        -->


        <br>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Adopt</li>
                </ol>
            </nav>

            <br>
            <h1 class="adoptCat">Adoption Gallery</h1>
            <hr>
            <h6 class="appointmentCat">Hello there! We are so happy and delighted for you to find a friend for life! 
                Adoption are carried out through appointments only. Please read the information below.</h6>
            <h6 class="appointmentCat">Can't find a suitable companion? Please revisit our site as we update frequently!</h6>
        </div>
        <br>

        <main class="container">
            <div class="row">
                <div class="col-sm"  align="center">

                    <figure class="figure">
                        <h4>Cat1</h4>
                        <img src="media/image/persian_cat_small.jpg" class="rounded figure-img img-fluid">
                        <figcaption class="figure-caption">
                            <table>
                                <tbody>
                                    <?php $row = mysqli_fetch_assoc($result) ?>
                                    <tr>Name: <?php echo $row['CatName']; ?></tr><br>
                                <tr>Description: <?php echo $row['Description']; ?></tr><br>
                                <tr>Breed <?php echo $row['CatType']; ?></tr><br>
                                <tr>Age: <?php echo $row['Age']; ?></tr><br>



                                </tbody>
                            </table>
                        </figcaption>




                        <br>
                        <a class="btn btn-primary" href="appointment.php">Make appointment</a>
                    </figure>
                </div>
                <div class="col-sm" align="center">
                    <figure class="figure">
                        <h4>Cat1</h4>
                        <img src="media/image/siamese_cat_small.jpg" class="rounded figure-img img-fluid">

                        <figcaption class="figure-caption">
                            <table>
                                <tbody>
                                    <?php $row = mysqli_fetch_assoc($result) ?>
                                    <tr>Name: <?php echo $row['CatName']; ?></tr><br>
                                <tr>Description: <?php echo $row['Description']; ?></tr><br>
                                <tr>Breed <?php echo $row['CatType']; ?></tr><br>
                                <tr>Age: <?php echo $row['Age']; ?></tr><br>



                                </tbody>
                            </table>
                        </figcaption>

                        <br>
                        <a class="btn btn-primary" href="appointment.php">Make appointment</a>
                    </figure>
                </div>
                <div class="col-sm" align="center">
                    <figure class="figure">
                        <h4>Cat1</h4>
                        <img src="media/image/burmese_cat_small.jpg" class="rounded figure-img img-fluid">
                        <figcaption class="figure-caption">
                            <table>
                                <tbody>
                                    <?php $row = mysqli_fetch_assoc($result) ?>
                                    <tr>Name: <?php echo $row['CatName']; ?></tr><br>
                                <tr>Description: <?php echo $row['Description']; ?></tr><br>
                                <tr>Breed <?php echo $row['CatType']; ?></tr><br>
                                <tr>Age: <?php echo $row['Age']; ?></tr><br>



                                </tbody>
                            </table>
                        </figcaption>
                        <br>
                        <a class="btn btn-primary" href="appointment.php">Make appointment</a>
                    </figure>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm"  align="center">
                    <figure class="figure">
                        <h4>Cat1</h4>
                        <img src="media/image/persian_cat_small.jpg" class="rounded figure-img img-fluid">
                        <figcaption class="figure-caption">
                            <table>
                                <tbody>
                                    <?php $row = mysqli_fetch_assoc($result) ?>
                                    <tr>Name: <?php echo $row['CatName']; ?></tr><br>
                                <tr>Description: <?php echo $row['Description']; ?></tr><br>
                                <tr>Breed <?php echo $row['CatType']; ?></tr><br>
                                <tr>Age: <?php echo $row['Age']; ?></tr><br>



                                </tbody>
                            </table>
                        </figcaption>
                        <br>
                        <a class="btn btn-primary" href="appointment.php">Make appointment</a>
                    </figure>
                </div>
                <div class="col-sm" align="center">
                    <figure class="figure">
                        <h4>Cat1</h4>
                        <img src="media/image/persian_cat_small.jpg" class="rounded figure-img img-fluid">
                        <figcaption class="figure-caption">
                            <table>
                                <tbody>
                                    <?php $row = mysqli_fetch_assoc($result) ?>
                                    <tr>Name: <?php echo $row['CatName']; ?></tr><br>
                                <tr>Description: <?php echo $row['Description']; ?></tr><br>
                                <tr>Breed <?php echo $row['CatType']; ?></tr><br>
                                <tr>Age: <?php echo $row['Age']; ?></tr><br>



                                </tbody>
                            </table>
                        </figcaption>
                        <br>
                        <a class="btn btn-primary" href="appointment.php">Make appointment</a>
                    </figure>
                </div>
                <div class="col-sm" align="center">
                    <figure class="figure">
                        <h4>Cat1</h4>
                        <img src="media/image/persian_cat_small.jpg" class="rounded figure-img img-fluid">
                        <figcaption class="figure-caption">
                            <table>
                                <tbody>
                                    <?php $row = mysqli_fetch_assoc($result) ?>
                                    <tr>Name: <?php echo $row['CatName']; ?></tr><br>
                                <tr>Description: <?php echo $row['Description']; ?></tr><br>
                                <tr>Breed <?php echo $row['CatType']; ?></tr><br>
                                <tr>Age: <?php echo $row['Age']; ?></tr><br>



                                </tbody>
                            </table>
                        </figcaption>
                        <br>
                        <a class="btn btn-primary" href="appointment.php">Make appointment</a>
                    </figure>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm"  align="center">
                    <figure class="figure">
                        <h4>Cat1</h4>
                        <img src="media/image/persian_cat_small.jpg" class="rounded figure-img img-fluid">
                        <figcaption class="figure-caption">
                            <table>
                                <tbody>
                                    <?php $row = mysqli_fetch_assoc($result) ?>
                                    <tr>Name: <?php echo $row['CatName']; ?></tr><br>
                                <tr>Description: <?php echo $row['Description']; ?></tr><br>
                                <tr>Breed <?php echo $row['CatType']; ?></tr><br>
                                <tr>Age: <?php echo $row['Age']; ?></tr><br>



                                </tbody>
                            </table>
                        </figcaption>
                        <br>
                        <a class="btn btn-primary" href="appointment.php">Make appointment</a>
                    </figure>
                </div>
                <div class="col-sm" align="center">
                    <figure class="figure">
                        <h4>Cat1</h4>
                        <img src="media/image/persian_cat_small.jpg" class="rounded figure-img img-fluid">
                        <figcaption class="figure-caption">
                            <table>
                                <tbody>
                                    <?php $row = mysqli_fetch_assoc($result) ?>
                                    <tr>Name: <?php echo $row['CatName']; ?></tr><br>
                                <tr>Description: <?php echo $row['Description']; ?></tr><br>
                                <tr>Breed <?php echo $row['CatType']; ?></tr><br>
                                <tr>Age: <?php echo $row['Age']; ?></tr><br>



                                </tbody>
                            </table>
                        </figcaption>
                        <br>
                        <a class="btn btn-primary" href="appointment.php">Make appointment</a>
                    </figure>
                </div>
                <div class="col-sm" align="center">
                    <figure class="figure">
                        <h4>Cat1</h4>
                        <img src="media/image/persian_cat_small.jpg" class="rounded figure-img img-fluid">
                        <figcaption class="figure-caption">
                            <table>
                                <tbody>
                                    <?php $row = mysqli_fetch_assoc($result) ?>
                                    <tr>Name: <?php echo $row['CatName']; ?></tr><br>
                                <tr>Description: <?php echo $row['Description']; ?></tr><br>
                                <tr>Breed <?php echo $row['CatType']; ?></tr><br>
                                <tr>Age: <?php echo $row['Age']; ?></tr><br>



                                </tbody>
                            </table>
                        </figcaption>
                        <br>
                        <a class="btn btn-primary" href="appointment.php">Make appointment</a>
                    </figure>
                </div>
            </div>
        </main>

        <!-- <main class="container">
             <div class="row">
         <div class="col-sm"  align="center">
             <figure class="figure">
                 <img src="media/image/image002.png" class="rounded figure-img img-fluid">
                 <figcaption class="figure-caption">$500</figcaption>
             </figure>
         </div>
         <div class="col-sm" align="center">
             <figure class="figure">
                 <img src="media/image/image003.png" class="rounded figure-img img-fluid">
                 <figcaption class="figure-caption">$500</figcaption>
             </figure>
         </div>                
                     
                
 
         </main> -->

        <?php
        include "inc.footer.php";
        ?>
    </body>
</html>
