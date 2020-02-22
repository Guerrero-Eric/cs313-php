<!DOCTYPE html>
<html lang="en">
<?php include('include/header.php'); ?>
<div class="signbg">
    <div class="wrapper fadeInDown">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Sign In</h3>
                </div>
                <div class="card-body">
                    <p>Please fill this form to create an account.</p>
                    <form id="form" action="include/signup_check.php" method="POST">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" id="fname" name="fname" class="form-control">
                            <span class="help-block" id="fname_error"></span>
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" id="lname" name="lname" class="form-control">
                            <span class="help-block" id="lname_error"></span>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" id="username" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" id="password" name="password" class="form-control">
                            <span class="help-block" id="password_error"></span>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" id="confirm_password" name="confirm_password" class="form-control">
                            <span class="help-block" id="confirm_password_error"></span>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" id="email" name="email" class="form-control">
                            <span class="help-block" id="email_error"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Submit">
                            <input type="reset" class="btn btn-default" value="Reset">
                        </div>
                        <p>Already have an account? <a href="login.php">Login here</a>.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('include/footer.php'); ?>

</html>