<?php
    include "inc.sessionauth.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include "inc.head.php";
        ?>
        <link rel="stylesheet" href="css/scroll_up.css">
    </head>
    <body>
        <button onclick="topFunction()" id="myBtn" title="Go to top">&#8593</button>
        <div id="parent-wrapper" class="d-flex flex-column min-vh-100">
            <?php
                include "inc.nav.php";
            ?>

            <div id="breadcrumb-wrapper" class="container mt-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="profile.php">Profile</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                    </ol>
                </nav>
            </div>

            <main id="content-wrapper" class="container mb-3">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-xl-6">
                        <div class="card">
                            <h4 class="card-header bg-info text-white">Edit Profile Information</h4>
                            <div class="card-body pb-0">
                                <form action="process/proc.profileedit.php" method="post">

                                    <div class="form-group">
                                        <label for="Edited_Email">Email Address: </label>
                                        <input required type="email" class="form-control" id="Edited_Email" name="Edited_Email" 
                                               value="<?php echo $Email; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="Edit_Email">First Name: </label>
                                        <input required maxlength="45" type="text" class="form-control" id="Edited_Fname" name="Edited_Fname" 
                                               value="<?php echo $Fname; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="Edit_Email">Last Name: </label>
                                        <input required maxlength="45" type="text" class="form-control" id="Edited_Lname" name="Edited_Lname" 
                                               value="<?php echo $Lname; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="Edit_Email">Phone Number: </label>
                                        <input required max="99999999" min="60000000" type="number" class="form-control" id="Edited_HPNum" name="Edited_HPNum" 
                                               value="<?php echo $HPNum; ?>">
                                    </div>
                                    <hr class="my-4">
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-warning">Update!</button>
                                    </div>
                                </form>
                                <div class="container-fluid pb-3">
                                    <a href="profile.php" class="btn btn-block btn-primary">Back to Profile</a>
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
        <script src="js/scroll_up.js"></script>
    </body>
</html>