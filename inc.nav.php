<!--
-
 Nav common
-
-->
<?php 
    if(!isset($_SESSION['SessionId'])){
        $Fname = "";
    }
?>
<nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-primary">
    <a class="navbar-brand" href="/">
        <img id="nav-logo" src="../media/icon/cat.svg" width="30" height="30" alt="CAT">
        Cat Sanctuary
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBarToggle">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navBarToggle">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../adopt.php">Adopt</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../aboutus.php">About Us</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="../login.php">
                    <img style="margin-bottom: 1px;" id="nav-logo" src="../media/icon/face-white-48dp.svg" width="30" height="30" alt="LOGIN">
                    <?php echo $Fname; ?>
                </a>
            </li>
        </ul>
    </div>
</nav>

