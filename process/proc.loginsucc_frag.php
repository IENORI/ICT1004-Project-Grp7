<!--
LOGIN SUCCESS FRAGMENT CONFIRMATION PAGE
-->

<?php
    $Fname = $_SESSION["Fname"];
?>

<!DOCTYPE html>
<html>
    <br>
    <div class="container">
        <div class="jumbotron">
          <h2>Welcome back, <?php echo $Fname ; ?></h2>
          <p class="lead">These pets are looking up at you, don't let them down.</p>
          <hr class="my-4">
          <p>Cat Sanctuary SG have cared for over 200 needy animals. Adopt a companion and change lives. It's in your hands.</p>
          <p class="lead">
              <a class="btn btn-primary btn-lg" href="../index.php" role="button">Home</a>
              <a class="btn btn-primary btn-lg" href="../profile.php" role="button">Profile</a> 
              
          </p>
        </div>
    </div>
    <br>
    <?php
        include "../inc.footer.php";
    ?>
</html>

