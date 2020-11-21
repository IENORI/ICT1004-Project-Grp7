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
          <h1 class="display-3">Welcome back, <?php echo $Fname ; ?></h1>   
          <p class="lead">These pets are looking up at you, don't let them down.</p>
          <hr class="my-4">
          <p>AdoptCat@SG have cared for over 200 needy animals every month. Adopt a companion and change lives. It's in your hands.</p>
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

