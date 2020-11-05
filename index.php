<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include "inc.head.php";
        ?>
    </head>
    <body>
        <?php
            include "inc.nav.php";
        ?>
        
        <!--
        -
        Page content
        -
        -->
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
            </div>  
        </header>
        
        <?php
            include "inc.front_store.php";
        ?>
        
        <?php
            include "inc.footer.php";
        ?>
    </body>
</html>
