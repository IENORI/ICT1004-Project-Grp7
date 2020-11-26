<?php
include "inc.sessionauthless.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        include "inc.head.php";
        include "inc.nav.php";
        ?>
        <link rel="stylesheet" href="css/index_css.css">
    </head>
    <body>
        <div class="hero-image">
            <div class="hero-text">
                <h3 style="color: white">ADOPTIONS NOW OPEN BY APPOINTMENT</h3>
                <p>Adopt a cutie who will brighten your day!</p>
<!--                <form action="adopt.php">-->
<!--                    <button class="btn btn-primary" type="submit">More information > </button>-->
<!--                </form>-->
                <a href="adopt.php" class="btn btn-primary px-5">Find out more!</a>

            </div>
        </div>

        <?php
        include "services.php";
        include "inc.footer.php";
        ?>

    </body>
</html>
