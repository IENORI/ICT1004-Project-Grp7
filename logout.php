<!--
    The only point of this is to destroy session variables and session
    instead of doing ajax / restful call from javascript in client page
-->

<?php
    include "inc.head.php";
    include "inc.nav.php";
    session_start();
    session_destroy();
    $_SESSION = []; 
?>

<!DOCTYPE html>
<html>
    <div class="body">
        <br>
        <div class="container">
            <div class="jumbotron">
              <h1 class="display-3">Successfully logged out</h1>   
              <hr class="my-4">
              <p class="lead">
                  <a class="btn btn-primary btn-lg" href="index.php" role="button">Home</a>
              </p>
            </div>
        </div>
    </div>
    <br>
    
    <?php
        include "inc.footer.php";
    ?>
</html>

