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

    <main id="content-wrapper" class="container mb-3">
        <div class="row justify-content-center">
                <div class="container">
                    <div class="jumbotron mt-3">
                        <h2>⛔️⛔️ Whoops! ⛔️⛔️</h2>
                        <p class="lead">Looks like our systems are facing some issues, check back again later.</p>
                        <p><small>ERR : <mark>Database connection failed.</mark></small></p>
                        <hr class="my-4">
                        <p class="lead">
                            <a class="btn btn-primary" href="/" role="button">Back to Home</a>
                        </p>
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
