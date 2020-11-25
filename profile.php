<!--
TOBEIMPLEMENTED:
    ALLOW USER TO ACCESS DIFFERENT PROFILES WITH 
    API:
        profile/<userid>

TODO:
    CHECK IF ADMIN GIVE MORE FUNCTIONS
    EDIT ACCOUNT INFORMATION (WIP)
-->


<?php
    include "inc.sessionauth.php";
?>

<html>
    <header>
        <?php
            include "inc.head.php";
        ?>
    </header>
    <div class="body">
        <?php 
            include "inc.nav.php";
        ?>
        <br>
        <div class="container">
            my account information:
            <br><br>
            <div class="row">
                <div class="col-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">User ID</h5>
                            <p class="card-text"> <?php echo $UID ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Email</h5>
                            <p class="card-text"> <?php echo $Email ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">First name</h5>
                            <p class="card-text"><?php echo $Fname ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Last Name</h5>
                            <p class="card-text"> <?php echo $Lname ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Phone Number</h5>
                            <p class="card-text"> <?php echo $HPNum; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <a href="profileedit.php" class="btn btn-primary">Edit Account information</a>
            <br>
            <br>
            <a href="logout.php" class="btn btn-danger">Log out</a>
        </div>
    </div>
</html>