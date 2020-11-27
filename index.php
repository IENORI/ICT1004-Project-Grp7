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
                        <p class="text-white m-4">Adopt a cutie who will brighten your day! Give them a home today!</p>
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

                <div>
                    <br>
                </div>

                <div id="index_callout_1" class="row container-fluid p-4 m-0">
                    <div class="col-md-6 col-xl-4 container align-self-center text-center">
                        <h1>Cat Sanctuary</h1>
                        <p>
                            We are a non-governmental, registered animal welfare charity. 
                            Providing shelter, food and love to cats and kittens that has yet to have them!
                            We rely on donations and help from the community to continue our important role as cat protectors!
                        </p>
                    </div>
                    <div class="col-md-6 col-xl-4 container align-self-center">
                        <img src="media/image/Kitten-PNG-File.png" alt="" class="img-fluid p-4 mx-auto d-block" style="max-height: 400px">
                    </div>
                </div>
                <!--How You Can Help-->
                <div class="bg-light py-5">
                    <div class="container py-5">
                        <div class="row mb-4">
                            <div class="col-lg-12" style="text-align: center">
                                <h2>How You Can Help</h2>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-xl-3 col-sm-6 mb-5">
                                <div class="bg-white rounded shadow-sm py-5 px-4 card border-primary mb-3">
                                    <img src="media/icon/index_HTH_icon.png"
                                         alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm align-self-center">
                                    <h5 class="mb-0">Adopt</h5>
                                    <span class="small">We care for over 50 needy animals every month. 
                                        Adopt a companion and change lives!</span>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 mb-5">
                                <div class="bg-white rounded shadow-sm py-5 px-4 card border-primary mb-3">
                                    <img src="media/icon/index_HTH_icon.png"
                                         alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm align-self-center">
                                    <h5 class="mb-0">Help Us</h5>
                                    <span class="small">Your time and skills can definitely make a difference. Join our community!</span>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 mb-5">
                                <div class="bg-white rounded shadow-sm py-5 px-4 card border-primary mb-3">
                                    <img src="media/icon/index_HTH_icon.png"
                                         alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm align-self-center">
                                    <h5 class="mb-0">Donation</h5>
                                    <span class="small">Your funds will support our welfare services for these little
                                        furballs!</span>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 mb-5">
                                <div class="bg-white rounded shadow-sm py-5 px-4 card border-primary mb-3">
                                    <img src="media/icon/index_HTH_icon.png"
                                         alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm align-self-center">
                                    <h5 class="mb-0">24/7 Rescues</h5>
                                    <span class="small">Call our 24/7 hotline to save a wandering cat or kitten from 
                                        any more potential danger!</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <?php
            include "inc.footer.php";
            ?>
        </div>
    </body>
</html>
