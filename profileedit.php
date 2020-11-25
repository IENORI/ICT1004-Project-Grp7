<?php
    include "inc.sessionauth.php";
?>

<html>
    <header>
        <?php
            include "inc.head.php";
        ?>
    </header>
    <div class="body">
        <?php 
            include "inc.nav.php";
        ?>
        <br>
        <div class="container">
            <br>
            <div class="card">
                <h4 class="card-header bg-success text-white">Edit Account Information</h4>
                <div class="card-body" style="padding-bottom: 0">
                    <form action="process/proc.profileedit.php" method="post">
                        
                        <div class="form-group">
                            <label for="Edited_Email">Email Address: </label>
                            <input required type="email" class="form-control" id="Edited_Email" name="Edited_Email"
                                   value="<?php echo $Email ;?>">
                            </input>
                        </div>
                        
                        <hr class="my-4">
                        
                        <div class="form-group">
                            <label for="Edit_Email">First Name: </label>
                            <input required maxlength="45" type="text" class="form-control" id="Edited_Fname" name="Edited_Fname"
                                   value="<?php echo $Fname ;?>">
                        </div>
                        
                        <hr class="my-4">
                        
                        <div class="form-group">
                            <label for="Edit_Email">Last Name: </label>
                            <input required maxlength="45" type="text" class="form-control" id="Edited_Lname" name="Edited_Lname"
                                   value="<?php echo $Lname ;?>">
                        </div>
                        
                        <hr class="my-4">
                        
                        <div class="form-group">
                            <label for="Edit_Email">Phone Number: </label>
                            <input required maxlength="45" type="text" class="form-control" id="Edited_HPNum" name="Edited_HPNum"
                                   value="<?php echo $HPNum ;?>">
                        </div>
                        
                        <hr class="my-4">
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-warning">Update!</button>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <br>
        </div>
    </div>
</html>