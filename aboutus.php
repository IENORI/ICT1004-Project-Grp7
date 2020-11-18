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
        <br>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
        
        <main class="container">
            <blockquote class="blockquote">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
        </main>

        <?php
            include "inc.footer.php";
        ?>
    </body>
</html>
