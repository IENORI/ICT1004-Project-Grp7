<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include "inc.head.php";
        ?>
    </head>
    <body>
        <!--
        -
        Page content
        -
        -->
        <div id="parent-wrapper" class="d-flex flex-column min-vh-100">
            <?php
                include "inc.nav.php";
            ?>
            <div id="breadcrumb-wrapper" class="container mt-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Adopt</li>
                    </ol>
                </nav>
            </div>

            <main id="content-wrapper" class="container">
                <div class="row">
                    <div class="col-sm"  align="center">
                        <figure class="figure">
                            <img src="media/image/image002.png" class="rounded figure-img img-fluid">
                            <figcaption class="figure-caption">$500</figcaption>
                        </figure>
                    </div>
                    <div class="col-sm" align="center">
                        <figure class="figure">
                            <img src="media/image/image003.png" class="rounded figure-img img-fluid">
                            <figcaption class="figure-caption">$500</figcaption>
                        </figure>
                    </div>
                </div>
            </main>

            <?php
                include "inc.footer.php";
            ?>
        </div>
    </body>
</html>
