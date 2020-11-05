<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include "inc.head.php";
        ?>
        <!--Index specific CSS-->
        <link rel="stylesheet" href="css/index_css.css">
        <!--JS-->
        <script src="js/index_js.js"></script>

    </head>
    <body>
        <!--Index specific Header-->
        <header class="fixed-top page-header">
            <div class="container-fluid container-fluid-max index-nav-pad">
                <nav id ="navbar" class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" href="/">
                        <img id="nav-logo" src="media/icon/cat.svg" width="30" height="30">
                        Fancy Felines
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBarToggle">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navBarToggle">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Store</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="cart.php">
                                    <img id="nav-logo" src="media/icon/shopping_cart-white-48dp.svg" width="30" height="30" alt="CAT">
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--
        -
        Page content
        -
        -->
        <main>
            <section id="hero_splash" class="d-flex align-items-center position-relative vh-100 cover hero" style="background-image:url(media/image/michael-sum-LEpfefQf4rU-unsplash.jpg);">
    <!--        <section id="home" class="d-flex align-items-center position-relative vh-100 cover hero" style="background-image:url(https://source.unsplash.com/2560x1600/?cat);">-->
              <div class="container-fluid container-fluid-max">
                <div class="row">
                  <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <h1 class="text-white">Cats</h1>
                    <div class="mt-3">
                      <a class="btn bg-red text-white mr-2" href="" role="button">What are they?</a>
                      <a class="btn bg-red text-white" href="" role="button">Should I fear them?</a>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section id="content" class="index-content-margin">
                <?php
                include "inc.front_store.php";
                ?>
            </section>
        </main>
        
        <?php
            include "inc.footer.php";
        ?>
    </body>
</html>
