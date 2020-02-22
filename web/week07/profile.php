<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php"); /* Redirect browser */
    exit();
}
require("include/functions.php");
$db = get_db();
$username = htmlspecialchars($_SESSION["username"]);
$stmt = $db->prepare("SELECT * FROM members Where username ='$username'");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['id'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include('include/header.php'); ?>

<div class="container page-header">
    <h1>Hi, <b><?php echo $username ?></b>. Welcome to our site.</h1>
</div>
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                <img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
            </div>
            <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                <div class="container" style="border-bottom:1px solid black">
                    <h2><?php echo $username ?></h2>
                </div>
                <hr>
                <ul class="container details">
                    <li>
                        <p><span>id: </span><?php echo $id; ?></p>
                    </li>
                    <li>
                        <p><span>E-mail: </span><?php echo $email; ?></p>
                    </li>
                    <li>
                        <p><span>First Name: </span><?php echo $fname; ?></p>
                    </li>
                    <li>
                        <p><span>Last Name: </span><?php echo $lname; ?></p>
                    </li>
                </ul>
            </div>
        </div>
        <p>
            <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
            <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
        </p>
    </div>

    <?php include('include/footer.php'); ?>

</html>