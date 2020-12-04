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
if (mysqli_num_rows($result) > 0) {

} else {
    $msg = "No Record found";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "inc.head.php";
    ?>
    <link rel="stylesheet" href="css/scroll_up.css">
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
                <li class="breadcrumb-item"><a href="adopt.php">Adopt</a></li>
                <li class="breadcrumb-item active" aria-current="page">New Appointment</li>
            </ol>
        </nav>
    </div>
    <main id="content-wrapper" class="container-fluid mb-3">
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
<!--            <div class="container">-->
<!--                <div class="jumbotron">-->
<!--                    <h3 class="selected">Cat selection:</h3>-->
<!---->
<!--                    <table>-->
<!--                        <tbody>-->
<!--                        <form action="process/proc.appointment.php?id=--><?php //echo $row['CID']; ?><!--" method="post">-->
<!--                            <tr><img src="--><?php //echo $row['Images'] ?><!--" class="appointmentImage"></tr>-->
<!--                            <br><br>-->
<!--                            <tr><b>Name: </b>--><?php //echo $row['CatName']; ?><!--</tr>-->
<!--                            <br>-->
<!--                            <tr><b>Description: </b> --><?php //echo $row['Description']; ?><!--</tr>-->
<!--                            <br>-->
<!--                            <tr><b>Breed: </b>--><?php //echo $row['CatType']; ?><!--</tr>-->
<!--                            <br>-->
<!--                            <tr><b>Age: </b>--><?php //echo $row['Age']; ?><!--</tr>-->
<!--                            <br>-->
<!--                            <tr><label for="selecttime"><b>Select Date and Time of appointment:</b></label><br>-->
<!--                                <input type="datetime-local" id="selecttime" name="selecttime" REQUIRED></tr>-->
<!--                            <br>-->
<!--                            <br>-->
<!--                            <td>-->
<!--                                <button type="submit" class="btn btn-primary" name="appointmentnext"-->
<!--                                        value="appointmentnext">Confirm book appointment-->
<!--                                </button>-->
<!--                            </td>-->
<!--                        </form>-->
<!--                        </tbody>-->
<!--                    </table>-->
<!--                </div>-->
<!--            </div>-->
            <div class="row justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card bg-info mb-4">
                        <div class="card-header">
                            <h4 class="my-auto text-white">New Cat Viewing Appointment</h4>
                        </div>
                        <img src="<?php echo $row['Images'] ?>" alt="imageCat" class="img-fluid">
                        <form action="process/proc.appointment.php?id=<?php echo $row['CID']; ?>" method="post"></li>
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
                            <li class="list-group-item">
                                <label for="selecttime"><h5 class="card-title" style="color: black"><b>Preferred Data & Time of appointment:</b></h5></label>
                                <input type="datetime-local" id="selecttime" name="selecttime" REQUIRED>
                            </li>
                            <div class="text-center">
                                <button type='submit' class='btn btn-block btn-primary' name='appointmentnext' value='appointmentnext'>Make appointment!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </main>

    <?php
    }
    include "inc.footer.php";
    ?>
</div>
</body>
</html>
