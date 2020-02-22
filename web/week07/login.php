<!DOCTYPE html>
<html lang="en">
<?php include('include/header.php'); ?>
<div class="logbg">
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <div class="wrapper">
                <h2>Login</h2>
                <p>Please fill in your credentials to login.</p>
                <form action="include/login_check.php" method="POST">
                    <div class="form-group ">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="password">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Login">
                    </div>
                    <p>Don't have an account? <a href="signup.php">Sign up now</a>.</p>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('include/footer.php'); ?>
</html>