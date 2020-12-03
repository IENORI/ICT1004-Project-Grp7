<!--
-
 Nav common
-
-->
<?php
    if (!isset($_SESSION['SessionId'])) {
        $Fname = "";
        $IsAdmin = 0;
    }
    
    //if the logged on user is admin
    if(isset($_SESSION['SessionId'])){
        if($_SESSION['IsAdmin'] == 1){
            $IsAdmin = 1;
        }
    }
?>
<nav class="navbar nav-pills sticky-top navbar-expand-sm navbar-dark bg-primary">
    <a class="navbar-brand" href="/">
        <img id="nav-logo" src="../media/icon/cat.svg" width="30" height="30" alt="Company Logo">
        <b>Cat Sanctuary</b>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBarToggle">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navBarToggle">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="../index.php"><b>Home</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="../adopt.php"><b>Adopt</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="../aboutus.php"><b>About Us</b></a>
            </li>
            <?php 
            if (isset($_SESSION['SessionId'])){
                echo "<li class='nav-item'>
                <a class='nav-link' href='../editAppointment.php'>Appointment</a>
            </li>";
            }
                if($IsAdmin){
                    include "inc.navadmin.php";
                }
            ?>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="../login.php">
                    <img style="margin-bottom: 1px;" id="nav-login-logo" src="../media/icon/face-white-48dp.svg" width="35" height="35" alt="Login Icon">
                    <?php echo $Fname; ?>
                </a>
            </li>
        </ul>
    </div>
</nav>

