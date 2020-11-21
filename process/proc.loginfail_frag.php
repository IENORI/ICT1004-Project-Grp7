<!--
LOGIN FAILURE FRAGMENT CONFIRMATION PAGE
-->

<?php
?>

<!DOCTYPE html>
<html>
    <br>
    <div class="container">
        <div class="jumbotron">
          <h1 class="display-3">Whoops,</h1>
            <p class="lead">Error detected when logging you in.</p>
          <hr class="my-4">
          <p> <?php echo $msg_error; ?></p>
          <p class="lead">
              <a class="btn btn-primary btn-lg" href="../login.php" role="button">Back to Login</a>
          </p>
        </div>
    </div>
</html>

<?php
    include "../inc.footer.php";
?>

