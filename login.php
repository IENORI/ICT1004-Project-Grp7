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
        <div class="container-md">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Login</li>
                </ol>
            </nav>
        </div>

        <main class="container-md">
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <div class="card">
                        <h4 class="card-header">Login</h4>
                        <div class="card-body" style="padding-bottom: 0">
                            <form action="process.login.php" method="post">
                                <div class="form-group">
                                    <label for="loginEmail">Email address :</label>
                                    <input required type="email" class="form-control" id="loginEmail" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="loginPassword">Password :</label>
                                    <input required type="password" class="form-control" id="loginPassword" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-muted">
                            <a href="#" class="card-link">Sign up for an account</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php
            include "inc.footer.php";
        ?>
    </body>
</html>
