<?php
// Initialize the session
session_start();

if (!isset($_SESSION["username"])) {

	header("Location: ../../login.php"); /* Redirect browser */

	exit();

}

require_once('db.php');


$username = $_SESSION["username"];


$stmt = $link->prepare("SELECT * FROM members Where username ='$username'");

$stmt->bindValue("id",$id, PDO::PARAM_INT);
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

<head>
  <meta charset="UTF-8">
  <title>Welcome</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <style type="text/css href=../css/style.css">
    body {
      font: 14px sans-serif;
      text-align: center;
    }
  </style>
</head>

<body>


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




    ?>
</body>

</html>