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
                    <form action="#" method="post">
                        
                        <div class="form-group">
                              <fieldset disabled="">
                                <label for="disabledInput">Current Email: </label>
                                <input type="text" class="form-control" id="disabledInput" placeholder="<?php echo $Email ;?>">
                              </fieldset>
                            <label for="Edited_Email">New Email Address: </label>
                            <input required type="email" class="form-control" id="Edited_Email" name="Edited_Email">
                        </div>
                        
                        <hr class="my-4">
                        
                        <div class="form-group">
                              <fieldset disabled="">
                                <label for="disabledInput">Current First Name:</label>
                                <input type="text" class="form-control" id="disabledInput" placeholder="<?php echo $Fname ;?>">
                              </fieldset>
                            <label for="Edit_Email">New First Name: </label>
                            <input required maxlength="45" type="text" class="form-control" id="Edited_Fname" name="Edited_Fname">
                        </div>
                        
                        <hr class="my-4">
                        
                        <div class="form-group">
                              <fieldset disabled="">
                                <label for="disabledInput">Current Last Name:</label>
                                <input type="text" class="form-control" id="disabledInput" placeholder="<?php echo $Lname ;?>">
                              </fieldset>
                            <label for="Edit_Email">New Last Name: </label>
                            <input required maxlength="45" type="text" class="form-control" id="Edited_Lname" name="Edited_Lname">
                        </div>
                        
                        <hr class="my-4">
                        
                        <div class="form-group">
                              <fieldset disabled="">
                                <label for="disabledInput">Current Phone Number:</label>
                                <input type="text" class="form-control" id="disabledInput" placeholder="<?php echo $HPNum ;?>">
                              </fieldset>
                            <label for="Edit_Email">New Phone Number: </label>
                            <input required maxlength="45" type="text" class="form-control" id="Edited_Lname" name="Edited_Lname">
                        </div>
                        
                        <hr class="my-4">
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-warning" disabled>Edit</button>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <br>
        </div>
    </div>
</html>