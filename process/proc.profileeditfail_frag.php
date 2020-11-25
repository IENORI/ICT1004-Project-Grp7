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
          <h2>Whoops,</h2>
          <p class="lead">Error detected when updating your credentials</p>
          <p> <?php echo $error_msg; ?></p>
          <p class="lead">
              <a class="btn btn-primary btn-lg" href="../profileedit.php" role="button">Back profile</a>
          </p>
        </div>
    </div>
</html>

<?php
    include "../inc.footer.php";
?>

