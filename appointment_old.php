<?php
include "inc.sessionauthless.php";
?>
<?php
$config = parse_ini_file('process/db.ini');

$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

$user = (!isset($_SESSION['UID']));

if (mysqli_connect_errno()) {
    header("Location: ../load_error.php");
} else {
    $selectQuery = "SELECT * FROM `cat` WHERE `CID` =" . $_GET['id'];
    $result = mysqli_query($conn, $selectQuery);

    $row = mysqli_fetch_assoc($result);
//<<<<<<< Updated upstream
//=======
//>>>>>>> Stashed changes
    if (mysqli_num_rows($result) > 0) {
        
    } else {
        $msg = "No Record found";
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


            <div id="parent-wrapper" class="d-flex flex-column min-vh-100">
                <?php
                include "inc.nav.php";
                ?>
                <br>
                <main id="content-wrapper" class="container-fluid p-0 m-0">
                    <?php
                    if (!isset($_SESSION['UID'])) {
                        echo "<div class='container'>";
                        echo "<div class='jumbotron'>";
                        echo "<h2>Whoops!</h2>";
                        echo "<p class='lead selected'>Please login before booking an appointment.</p>";
                        echo "<hr class='my-4'>";
                        echo "<a href='login.php' class= 'btn btn-lg btn-danger'>Login</a>";
                        echo "</div>";
                        echo "</div>";
                    } else {
                        ?>
                        <div class="container">
                            <div class="jumbotron">

                                <h3 class="selected">Cat selection:</h3>


                                <table>
                                    <tbody>
                                    <form action="process/proc.appointment.php?id=<?php echo $row['CID']; ?>" method="post">

                                        <tr><img src="<?php echo $row['Images'] ?>" class="appointmentImage"></tr><br><br>

                                        <tr><b>Name: </b><?php echo $row['CatName']; ?></tr><br>

                                        <tr><b>Description: </b> <?php echo $row['Description']; ?></tr><br>

                                        <tr><b>Breed: </b><?php echo $row['CatType']; ?></tr><br>

                                        <tr><b>Age: </b><?php echo $row['Age']; ?></tr><br>

                                        <tr><label for="selecttime"><b>Select Date and Time of appointment:</b></label><br>
                                        <input type="datetime-local"  id="selecttime" name="selecttime" REQUIRED></tr>
                                        <br>
                                        <br>


                                        <td><button type="submit" class="btn btn-primary" name="appointmentnext" value="appointmentnext">Confirm book appointment</button></td>

                                    </form>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </main>
                <br>
                <?php
            }
            include "inc.footer.php";
            ?>
        </div>
        <br>
    </body>
</html>
