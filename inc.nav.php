<!--
-
 Nav common
-
-->
<?php
    if (!isset($_SESSION['SessionId'])) {
        $Fname = "";
    }
    
    //if the logged on user is admin
    if(isset($_SESSION['SessionId'])){
        if($_SESSION['IsAdmin'] == 1){
            $Admin = 1;
        }
    }
?>
<nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-primary">
    <a class="navbar-brand" href="/">
        <img id="nav-logo" src="../media/icon/cat.svg" width="30" height="30" alt="Company Logo">
        Cat Sanctuary
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBarToggle">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navBarToggle">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../adopt.php">Adopt</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../aboutus.php">About Us</a>
            </li>
            <?php 
                if($IsAdmin){
                    include "inc.navadmin.php";
                }
            ;?>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="../login.php">
                    <img style="margin-bottom: 1px;" id="nav-login-logo" src="../media/icon/face-white-48dp.svg" width="30" height="30" alt="Login Icon">
                    <?php echo $Fname; ?>
                </a>
            </li>
        </ul>
    </div>
</nav>

