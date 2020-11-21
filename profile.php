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
    /*
     * Checks for existing session if no started session then start one 
     * Session does not carry over from proc.login.php
     * But will resume to the same session when started again.
    */
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    /*
     * Initializing variables from logged on session
     * if undefined, there's a chance it is unintended access 
     *   i.e. simply accessing /profile.php
     * or that some variables failed to initialize
     *   suggest to check proc.login.php line 148 onwards
     */
    //initializing session variables
    try {
        $UID = $_SESSION['UID'];
        $Email = $_SESSION['Email'];
        $Fname = $_SESSION['Fname'];
        $Lname = $_SESSION['Lname'];
        $IsAdmin = $_SESSION['IsAdmin'];
    }
    catch (Exception $e){
        echo "UNAUTHORIZED ACCESS / PAGE NOT FOUND";
        echo "Go back home page";
    }
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
            </div>
            <br>
            <a href="profileedit.php" class="btn btn-primary">Edit Account information</a>
            <br>
            <br>
            <a href="logout.php" class="btn btn-danger">Log out</a>
        </div>
    </div>
</html>