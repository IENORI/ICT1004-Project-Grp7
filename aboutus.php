<!--
    TODO:
        CHANGE THE PROFILE PIC TO ACTUAL IMAGES OF OUR FACE MAYBE?
        ADD ALT TAGS FOR THE IMAGES
        ADD STUDENT ID
        
        ADD SOME EASY WORDS INTO THE 4 H4 SECTIONS IN FIRST HALF
-->

<?php
    include "inc.sessionauthless.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include "inc.head.php";
        ?>
    </head>
    <body>
        <div id="parent-wrapper" class="d-flex flex-column min-vh-100">
            <?php
                include "inc.nav.php";
            ?>

<!--            <div id="breadcrumb-wrapper" class="container mt-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>-->
            <!--Our Team-->
            <div class="bg-light py-5">
                <div class="container py-5">
                  <div class="row mb-4">
                    <div class="col-lg-5">
                        <h2 class="display-4 font-weight-light">Our team</h2>
                        <p class="font-italic">2020 ICT 1004 GROUP 7</p>
                    </div>
                  </div>
                    <div class="row text-center">
                        <!--Member-->
                        <div class="col-xl-3 col-sm-6 mb-5">
                          <div class="bg-white rounded shadow-sm py-5 px-4">
                              <img src="https://www.uidownload.com/files/762/596/883/free-vector-business-man-avatar-silhouette.jpg" 
                                   alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                            <h5 class="mb-0">Koh Jia Cheng</h5>
                            <span class="small text-uppercase text-muted">2000665</span>
                            <ul class="social mb-0 list-inline mt-3">
                              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <!--Member-->
                        <div class="col-xl-3 col-sm-6 mb-5">
                          <div class="bg-white rounded shadow-sm py-5 px-4">
                              <img src="https://www.uidownload.com/files/762/596/883/free-vector-business-man-avatar-silhouette.jpg" 
                                   alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                            <h5 class="mb-0">Foong Jun Hui</h5>
                            <span class="small text-uppercase text-muted">INSERT STUD ID</span>
                            <ul class="social mb-0 list-inline mt-3">
                              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                          </div>
                        </div>
                       <!--Member-->
                        <div class="col-xl-3 col-sm-6 mb-5">
                          <div class="bg-white rounded shadow-sm py-5 px-4">
                              <img src="https://www.uidownload.com/files/762/596/883/free-vector-business-man-avatar-silhouette.jpg" 
                                   alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                            <h5 class="mb-0">Daniel Tan Jun Hao</h5>
                            <span class="small text-uppercase text-muted">INSERT STUD ID</span>
                            <ul class="social mb-0 list-inline mt-3">
                              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                          </div>
                        </div>
                       <!--Member-->
                        <div class="col-xl-3 col-sm-6 mb-5">
                          <div class="bg-white rounded shadow-sm py-5 px-4">
                              <img src="https://www.uidownload.com/files/762/596/883/free-vector-business-man-avatar-silhouette.jpg" 
                                   alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                            <h5 class="mb-0">Chandran P.</h5>
                            <span class="small text-uppercase text-muted">INSERT STUD ID</span>
                            <ul class="social mb-0 list-inline mt-3">
                              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" style="padding-top: 50px;">
                <div class="row">
                    <div class="col-6">
                        <h2> About us </h2>
                    </div>
                    <div class="col-6">
                        <h4>Work with our hearts</h4>
                        <p>
                            blah blah
                        </p>
                        <h4>Passionate about cats</h4>
                        <p>
                            blah blah
                        </p>
<!--                        <h4>Find us @</h4>
                        <iframe width="200" height="180"
                            src="https://maps.google.com/maps?q=sit%20singapore&t=&z=13&ie=UTF8&iwloc=&output=embed">
                        </iframe>-->
                    </div>
                </div>
            </div>
            <br>
            <br>
            <?php
                include "inc.footer.php";
            ?>
        </div>

    </body>
</html>
