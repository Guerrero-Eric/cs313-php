<?php
require "register_form.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body {
            font: 14px sans-serif;
            background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
        }

        .wrapper {
            width: 350px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="wrapper fadeInDown">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Sign In</h3>
                </div>
                <div class="card-body">
                    <p>Please fill this form to create an account.</p>
                    <form action="register_form.php" method="POST" onsubmit="return signupvalidation()">
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
                            <span class="help-block" id="username_error"></span>
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
                        <p>Already have an account? <a href="../../login.php">Login here</a>.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="signup_validation.js"></script>
</body>

</html>