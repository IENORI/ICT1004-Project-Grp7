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
                    <li class="breadcrumb-item active" aria-current="page">Sign up</li>
                </ol>
            </nav>
        </div>

        <main class="container-md">
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <div class="card">
                        <h4 class="card-header bg-secondary text-white">Create your AdoptCat@SG Account</h4>
                        <div class="card-body" style="padding-bottom: 0">
                            <p class="card-text">Kindly provide the following information to create an account with us.</p>
                            <form action="process.login.php" method="post">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <input required maxlength="45" type="text" class="form-control" id="signup_FirstName" name="signup_Firstname" placeholder="First name">
                                        </div>
                                        <div class="col">
                                            <input maxlength="45" type="text" class="form-control" id="signup_LastName" name="signup_Firstname" placeholder="Last name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input required type="email" class="form-control" id="signup_Email" name="signup_Email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">🇸🇬 +65</span>
                                        </div>
                                        <input required maxlength="8" minlength="8" type="number" class="form-control" id="signup_MobileNumber" name="signup_MobileNumber" placeholder="Mobile Number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <input required maxlength="32" minlength="8" type="password" class="form-control" id="signup_Password" name="signup_Password" placeholder="Password">
                                        </div>
                                        <div class="col">
                                            <input required maxlength="32" minlength="8" type="password" class="form-control" id="signup_PasswordConfirm" name="signup_Password" placeholder="Confirm">
                                        </div>
                                    </div>
                                    <p><small>Passwords are required to contain between <strong>8</strong> and <strong>32</strong> characters.</small></p>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input required type="checkbox" name="agree">
                                        Agree to <abbr title="attribute">terms and conditions.</abbr>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-secondary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-muted">
                            <a href="login.php" class="card-link text-info">Already have an account? Sign in instead.</a>
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
