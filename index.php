<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        include "inc.head.php";
        ?>
        <title>ICT1004 Group 7</title>
    </head>
    <body>
        <?php
        include "inc.nav.php";
        ?>
        <header>
            <div class="jumbotron">
                <div class="container">
                <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="10000">
                            <img src="media/image/untitled.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-interval="2000">
                            <img src="media/image/untitled.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="media/image/untitled.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                </div>
                <!--<h1 class="display-4">Hello, world!</h1>-->
                <!--<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>-->
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            </div>            
        </header>
        <main class="container">
            
        </main>
        <?php
            include "inc.footer.php";
        ?>
    </body>
</html>
