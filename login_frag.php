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
                include "inc.nav.php";  // PLACE ALL WITHIN PARENT WRAPPER TO FIX FOOTER PLACEMENT
            ?>

            <div id="breadcrumb-wrapper" class="container mt-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                    </ol>
                </nav>
            </div>

            <main id="content-wrapper" class="container mb-3">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-xl-6">
                        <?php
                        if (isset($_GET["err"])) {
                            if ($_GET["err"] == 0) {
                                include "inc.signup_succ.php";
                            } else if ($_GET["err"] == 2) {
                                include "inc.no_access.php";
                            }
                        }
                        ?>
                        <div class="card">
                            <h4 class="card-header bg-success text-white">Login</h4>
                            <div class="card-body pb-0">
                                <form action="process/proc.login.php" method="post">
                                    <div class="form-group">
                                        <label for="login_Email">Email address :</label>
                                        <input required type="email" class="form-control" id="login_Email" name="login_Email" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="login_Password">Password :</label>
                                        <input required maxlength="32" minlength="8" type="password" class="form-control" id="login_Password" name="login_Password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-muted">
                                <a href="signup.php" class="card-link text-info">Sign up for an account, its free!</a>
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

