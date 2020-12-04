<?php
include "inc.sessionauthless.php";
?>
<?php
$config = parse_ini_file('process/db.ini');

$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);



if (mysqli_connect_errno()) {
//    echo "<br><h4>You are not connected to the server</br></h4>";
//    exit();
    header("Location: ../load_error.php");
} else {
    $selectQuery = "SELECT * FROM `cat` ORDER BY `CID` ASC"; //cats will displayed in ascending order by the id of the cats 
 
    $result = mysqli_query($conn, $selectQuery);
   
    if (mysqli_num_rows($result) > 0) {
        
    } else {
        $msg = "No Record found";
    }
}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
    <head>
        <?php
            include "inc.head.php";
        ?>
        <link rel="stylesheet" href="css/scroll_up.css">
        <link rel="stylesheet" href="css/adoption_info.css">
    </head>
    <body>
        <button onclick="topFunction()" id="myBtn" title="Go to top">&#8593</button>
        <div id="parent-wrapper" class="d-flex flex-column min-vh-100">

            <?php
                include "inc.nav.php";
            ?>

            <div id="breadcrumb-wrapper" class="container mt-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Adopt</li>
                    </ol>
                </nav>
            </div>

            <main id="content-wrapper" class="container mb-3">
                <div class="container pt-3 pb-3">
                    <h1 class="adoptCat">Adoption Gallery</h1>
                    <hr>
                    <h6 class="appointmentCat">We are so excited for you to find a friend for life! Please read the information below for the adoption
                        process!</h6>
                    <h6 class="appointmentCat">Can't find a suitable companion? Please revisit our site as we update frequently!</h6>
                </div>

                <div class="container">
                    <br>
                    <button class="collapsible bg-primary">Adoption Information</button>
                    <div class="content">
                        <br>
                        <h4>How to Adopt</h4>
                        <hr>
                        <h6>Step 1: Browse adoption gallery</h6>
                        <br>
                        <h6>Step 2: Click on "Make appointment"</h6>
                        <br>
                        <h6>Step 3: Show up for your appointment on time</h6>
                        <br>
                    </div>
                    <button class="collapsible bg-primary mt-2">Frequently Asked Questions</button>
                    <div class="content">
                        <br>
                        <h6><b>- Is cats easy to take care of ?</b></h6>
                        <h6>You betcha!</h6>
                        <br>
                        <h6><b>- Is cats the best thing ever ?</b></h6>
                        <h6>They are definitely a bundle of joy!</h6>
                        <br>
                        <h6><b>- Will cat get sick easily ?</b></h6>
                        <h6>With proper care they will definitely not get sick easily!</h6>
                        <br>
                    </div>
                </div>
                <br>

                <div class="row justify-content-center">
                    <?php
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <div class="col-md-6 col-xl-4">
                        <div class="card bg-secondary mb-4">
                            <div class="card-header">
                                <h4 class="my-auto text-white"><?php echo $row['CatName'] ?></h4>
                            </div>
                            <img src="<?php echo $row['Images'] ?>" alt="imageCat" class="img-fluid">
                            <form action="appointment.php?id=<?php echo $row['CID']; ?>" method="post"></li>
                                <li class="list-group-item">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info text-white">Name: </span>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><?php echo $row['CatName']; ?> </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info text-white">Personality: </span>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><?php echo $row['Description']; ?> </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info text-white">Breed: </span>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><?php echo $row['CatType']; ?> </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-danger text-white">Age: </span>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><?php echo $row['Age']; ?> </span>
                                        </div>
                                    </div>
                                </li>
                                <div class="text-center">
                                    <button type='submit' class='btn btn-block btn-primary' name='appointmentnext' value='appointmentnext'>Make appointment!</button>
                                </div>
                            </form>
                        </div>

                    <?php
                        echo "</div>";}
                    ?>
                </div>
            </main>

            <?php
                include "inc.footer.php";
            ?>
            <script src="js/adoption_info.js"></script>
            <script src="js/scroll_up.js"></script>
        </div>
    </body>
</html>
