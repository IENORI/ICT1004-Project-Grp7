<?php
    include "inc.sessionauth.php";
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

            <div id="breadcrumb-wrapper" class="container mt-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
            </div>

            <main id="content-wrapper" class="container mb-3">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-xl-6">
                        <div class="card">
                            <h4 class="card-header bg-secondary text-white">My Profile</h4>
                            <div class="card-body pb-0">
                                <div class="form-group">
                                    <fieldset disabled="">
                                        <label class="control-label" for="userUID">User ID:</label>
                                        <input class="form-control" id="userUID" type="text" placeholder="<?php echo $UID; ?>" disabled="">
                                    </fieldset>
                                </div>
                                <div class="form-group">
                                    <fieldset disabled="">
                                        <label class="control-label" for="userEmail">Email:</label>
                                        <input class="form-control" id="userEmail" type="text" placeholder="<?php echo $Email; ?>" disabled="">
                                    </fieldset>
                                </div>
                                <div class="form-group">
                                    <fieldset disabled="">
                                        <label class="control-label" for="userFname">First Name:</label>
                                        <input class="form-control" id="userFname" type="text" placeholder="<?php echo $Fname; ?>" disabled="">
                                    </fieldset>
                                </div>
                                <div class="form-group">
                                    <fieldset disabled="">
                                        <label class="control-label" for="userLname">Last Name:</label>
                                        <input class="form-control" id="userLname" type="text" placeholder="<?php echo $Lname; ?>" disabled="">
                                    </fieldset>
                                </div>
                                <div class="form-group">
                                    <fieldset disabled="">
                                        <label class="control-label" for="userHP">Phone Number:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">🇸🇬 +65</span>
                                            </div>
                                            <input class="form-control" id="userHP" type="text" placeholder="<?php echo $HPNum; ?>" disabled="">
                                        </div>
                                    </fieldset>
                                </div>
                                <hr class="my-4">
                                <div class="container-fluid">
                                    <a href="profileedit.php" class="btn btn-block btn-primary">Edit Account information</a>
                                </div>
                                <div class="container-fluid p-3 text-center">
                                    <a href="logout.php" class="btn btn-danger">Log out</a>
                                </div>
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