<!DOCTYPE html>
<html lang="en">
<?php include('include/header.php'); ?>
<div class="bg">
    <div class="wrapper">
        <div class="card text-white bg-dark mb-3" style="width: 22rem; margin:0 auto;">
            <img class="card-img-top" src="https://logopond.com/logos/dd424b0cc3438a69fab98830ae9c12de.png" alt="Card image cap">

            <div class="card-footer text-center">

                <h3>Welcome</h3><br>

                <button class="btn btn-primary btn-lg float-left" onClick="location.href='login.php'" id="left" style="color:white">
                    Login
                </button>

                <button class="btn btn-danger btn-lg float-right" onClick="location.href='signup.php'" id="right" style="color:white">
                    Signup
                </button>
            </div>
        </div>
    </div>
</div>
<?php include('include/footer.php'); ?>

</html>