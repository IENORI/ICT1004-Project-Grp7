<?php
include "inc.sessionauthless.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        include "inc.head.php";
        ?>
        <!--CSS-->
        <link rel="stylesheet" href="css/index_css.css">
    </head>
    <body>
        <div id="parent-wrapper" class="d-flex flex-column min-vh-100">
            <?php
            include "inc.nav.php";
            ?>

            <!-- Main wrapper to help split from nav-->
            <main id="content-wrapper" class="container-fluid p-0 m-0">
                <!-- Banner -->
                <div id="index_banner_image" class="row container-fluid p-0 m-0">
                    <div id="index_banner_text" class="justify-content-center align-self-center container-fluid">
                        <h3 class="text-white p-0">ADOPTIONS NOW OPEN BY APPOINTMENT</h3>
                        <p class="text-white m-4">Adopt a cutie who will brighten your day!</p>
                        <a href="adopt.php" class="btn btn-primary px-4">Find out more!</a>
                    </div>
                </div>

                <div>
                    <br>
                </div>

                <div class="index_row">
                    <div class="index_column" style="background-color: #37b885;">
                        <h3 class="index_text">350</h3>
                        <p class = "index_text">Cats Rescued!</p>
                    </div>
                    <div class="index_column" style="background-color: #42c692;">
                        <h3 class="index_text">341</h3>
                        <p class = "index_text">Cats Found Homes</p>
                    </div>
                    <div class="index_column" style="background-color: #37b885;">
                        <h3 class="index_text">100%</h3>
                        <p class = "index_text">Happy Adopters!</p>
                    </div>
                </div>
                <?php
                include "services.php";
                ?>
            </main>

            <?php
            include "inc.footer.php";
            ?>
        </div>
    </body>
</html>
