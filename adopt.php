<?php
include "inc.sessionauthless.php";
?>
<?php
$config = parse_ini_file('process/db.ini');

$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);



if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
} else {
    $selectQuery = "SELECT * FROM `cat` ORDER BY `CID` ASC";
    $result = mysqli_query($conn, $selectQuery);
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
        <link rel="stylesheet" href="css/scroll_up.css">
        <link rel="stylesheet" href="css/adoption_info.css">
    </head>
    <body>
        <button onclick="topFunction()" id="myBtn" title="Go to top">&#8593</button>
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
            <h6 class="appointmentCat">We are so excited for you to find a friend for life! Please read the information below for the adoption 
                process!</h6>
            <h6 class="appointmentCat">Can't find a suitable companion? Please revisit our site as we update frequently!<h6>
                    </div>
        <div> 
            <button class="collapsible">Open Collapsible</button>
            <div class="content">
                <p>hello</p>
            </div>
        </div>
                    <br>

                    <main class="container">
                        <div class="row">
                            <div class="col-sm"  align="center">

                                <figure class="figure">
                                    <h4>Cat1</h4>

                                    <figcaption class="figure-caption">
                                        <table>
                                            <tbody>
                                                <?php $row = mysqli_fetch_assoc($result) ?>
                                            <form action="appointment.php?id=<?php echo $row['CID']; ?>" method="post">
                                                <tr><img src="<?php echo $row['Images'] ?>" class="rounded figure-img img-fluid"></tr>
                                                <tr>Name: <?php echo $row['CatName']; ?></tr><br>
                                                <tr>Description: <?php echo $row['Description']; ?></tr><br>
                                                <tr>Breed: <?php echo $row['CatType']; ?></tr><br>
                                                <tr>Age: <?php echo $row['Age']; ?></tr><br>
                                                <td><button type="submit" class="btn btn-primary" name="appointmentnext" value="appointmentnext">
                                                        Make appointment</button></td>
                                            </form>
                                            </tbody>
                                            <br>
                                        </table>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-sm" align="center">
                                <figure class="figure">
                                    <h4>Cat1</h4>


                                    <figcaption class="figure-caption">
                                        <table>
                                            <tbody>
                                                <?php $row = mysqli_fetch_assoc($result) ?>
                                            <form action="appointment.php?id=<?php echo $row['CID']; ?>" method="post">
                                                <tr><img src="<?php echo $row['Images'] ?>" class="rounded figure-img img-fluid"></tr>
                                                <tr>Name: <?php echo $row['CatName']; ?></tr><br>
                                                <tr>Description: <?php echo $row['Description']; ?></tr><br>
                                                <tr>Breed: <?php echo $row['CatType']; ?></tr><br>
                                                <tr>Age: <?php echo $row['Age']; ?></tr><br>
                                                <td><button type="submit" class="btn btn-primary" name="appointmentnext" value="appointmentnext">
                                                        Make appointment</button></td>
                                            </form>


                                            </tbody>


                                            <br>

                                        </table>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-sm" align="center">
                                <figure class="figure">
                                    <h4>Cat1</h4>

                                    <figcaption class="figure-caption">
                                        <table>
                                            <tbody>
                                                <?php $row = mysqli_fetch_assoc($result) ?>
                                            <form action="appointment.php?id=<?php echo $row['CID']; ?>" method="post">
                                                <tr><img src="<?php echo $row['Images'] ?>" class="rounded figure-img img-fluid"></tr>
                                                <tr>Name: <?php echo $row['CatName']; ?></tr><br>
                                                <tr>Description: <?php echo $row['Description']; ?></tr><br>
                                                <tr>Breed: <?php echo $row['CatType']; ?></tr><br>
                                                <tr>Age: <?php echo $row['Age']; ?></tr><br>
                                                <td><button type="submit" class="btn btn-primary" name="appointmentnext" value="appointmentnext">
                                                        Make appointment</button></td>
                                            </form>


                                            </tbody>

                                            <br>

                                        </table>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm"  align="center">
                                <figure class="figure">
                                    <h4>Cat1</h4>

                                    <figcaption class="figure-caption">
                                        <table>
                                            <tbody>
                                                <?php $row = mysqli_fetch_assoc($result) ?>
                                            <form action="appointment.php?id=<?php echo $row['CID']; ?>" method="post">
                                                <tr><img src="<?php echo $row['Images'] ?>" class="rounded figure-img img-fluid"></tr>
                                                <tr>Name: <?php echo $row['CatName']; ?></tr><br>
                                                <tr>Description: <?php echo $row['Description']; ?></tr><br>
                                                <tr>Breed: <?php echo $row['CatType']; ?></tr><br>
                                                <tr>Age: <?php echo $row['Age']; ?></tr><br>
                                                <td><button type="submit" class="btn btn-primary" name="appointmentnext" value="appointmentnext">
                                                        Make appointment</button></td>
                                            </form>


                                            </tbody>

                                            <br>

                                        </table>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-sm" align="center">
                                <figure class="figure">
                                    <h4>Cat1</h4>

                                    <figcaption class="figure-caption">
                                        <table>
                                            <tbody>
                                                <?php $row = mysqli_fetch_assoc($result) ?>
                                            <form action="appointment.php?id=<?php echo $row['CID']; ?>" method="post">
                                                <tr><img src="<?php echo $row['Images'] ?>" class="rounded figure-img img-fluid"></tr>
                                                <tr>Name: <?php echo $row['CatName']; ?></tr><br>
                                                <tr>Description: <?php echo $row['Description']; ?></tr><br>
                                                <tr>Breed: <?php echo $row['CatType']; ?></tr><br>
                                                <tr>Age: <?php echo $row['Age']; ?></tr><br>
                                                <td><button type="submit" class="btn btn-primary" name="appointmentnext" value="appointmentnext">
                                                        Make appointment</button></td>
                                            </form>


                                            </tbody>

                                            <br>

                                        </table>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-sm" align="center">
                                <figure class="figure">
                                    <h4>Cat1</h4>

                                    <figcaption class="figure-caption">
                                        <table>
                                            <tbody>
                                                <?php $row = mysqli_fetch_assoc($result) ?>
                                            <form action="appointment.php?id=<?php echo $row['CID']; ?>" method="post">
                                                <tr><img src="<?php echo $row['Images'] ?>" class="rounded figure-img img-fluid"></tr>
                                                <tr>Name: <?php echo $row['CatName']; ?></tr><br>
                                                <tr>Description: <?php echo $row['Description']; ?></tr><br>
                                                <tr>Breed: <?php echo $row['CatType']; ?></tr><br>
                                                <tr>Age: <?php echo $row['Age']; ?></tr><br>
                                                <td><button type="submit" class="btn btn-primary" name="appointmentnext" value="appointmentnext">
                                                        Make appointment</button></td>
                                            </form>


                                            </tbody>

                                            <br>

                                        </table>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm"  align="center">
                                <figure class="figure">
                                    <h4>Cat1</h4>

                                    <figcaption class="figure-caption">
                                        <table>
                                            <tbody>
                                                <?php $row = mysqli_fetch_assoc($result) ?>
                                            <form action="appointment.php?id=<?php echo $row['CID']; ?>" method="post">
                                                <tr><img src="<?php echo $row['Images'] ?>" class="rounded figure-img img-fluid"></tr>
                                                <tr>Name: <?php echo $row['CatName']; ?></tr><br>
                                                <tr>Description: <?php echo $row['Description']; ?></tr><br>
                                                <tr>Breed: <?php echo $row['CatType']; ?></tr><br>
                                                <tr>Age: <?php echo $row['Age']; ?></tr><br>
                                                <td><button type="submit" class="btn btn-primary" name="appointmentnext" value="appointmentnext">
                                                        Make appointment</button></td>
                                            </form>


                                            </tbody>

                                            <br>

                                        </table>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-sm" align="center">
                                <figure class="figure">
                                    <h4>Cat1</h4>

                                    <figcaption class="figure-caption">
                                        <table>
                                            <tbody>
                                                <?php $row = mysqli_fetch_assoc($result) ?>
                                            <form action="appointment.php?id=<?php echo $row['CID']; ?>" method="post">
                                                <tr><img src="<?php echo $row['Images'] ?>" class="rounded figure-img img-fluid"></tr>
                                                <tr>Name: <?php echo $row['CatName']; ?></tr><br>
                                                <tr>Description: <?php echo $row['Description']; ?></tr><br>
                                                <tr>Breed: <?php echo $row['CatType']; ?></tr><br>
                                                <tr>Age: <?php echo $row['Age']; ?></tr><br>
                                                <td><button type="submit" class="btn btn-primary" name="appointmentnext" value="appointmentnext">
                                                        Make appointment</button></td>
                                            </form>


                                            </tbody>

                                            <br>

                                        </table>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-sm" align="center">
                                <figure class="figure">
                                    <h4>Cat1</h4>

                                    <figcaption class="figure-caption">
                                        <table>
                                            <tbody>
                                                <?php $row = mysqli_fetch_assoc($result) ?>
                                            <form action="appointment.php?id=<?php echo $row['CID']; ?>" method="post">
                                                <tr><img src="<?php echo $row['Images'] ?>" class="rounded figure-img img-fluid"></tr>
                                                <tr>Name: <?php echo $row['CatName']; ?></tr><br>
                                                <tr>Description: <?php echo $row['Description']; ?></tr><br>
                                                <tr>Breed: <?php echo $row['CatType']; ?></tr><br>
                                                <tr>Age: <?php echo $row['Age']; ?></tr><br>
                                                <td><button type="submit" class="btn btn-primary" name="appointmentnext" value="appointmentnext">
                                                        Make appointment</button></td>
                                            </form>


                                            </tbody>

                                            <br>

                                        </table>
                                    </figcaption>
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
                    <script src="js/adoption_info.js"></script>
                    <script src="js/scroll_up.js"></script>
                    </body>
                    </html>
