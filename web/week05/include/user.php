<?php
// Include db file
require_once "db.php";
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: ../login.php");
  exit;
}

$username = htmlspecialchars($_SESSION["username"]);

$sql = "SELECT * FROM members WHERE username = '$username'";
$result = mysqli_query($link, $sql);
$resltCheck =  mysqli_num_rows($result);

if ($resltCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
  }
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
    <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
  </div>
  <div class="container">
    <div class="jumbotron">
      <div class="row">
        <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
          <img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
        </div>
        <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
          <div class="container" style="border-bottom:1px solid black">
            <h2><?php echo htmlspecialchars($_SESSION["username"]); ?></h2>
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




    <?php mysqli_close($link); ?>
    ?>
</body>

</html>