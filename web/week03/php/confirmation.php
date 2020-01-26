<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>03 Prove: Assignment - Shopping Cart</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/heroic-features.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">CS 313</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../../shoppingCart.php">Home
              <span class="sr-only">(current)</span>
            </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="viewCart.php">View Cart</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>


    <div class="card">
  <h5 class="card-header">Thank You!</h5>
  <div class="card-body">
    <h5 class="card-title">Purchased Confirmed</h5>
    <p class="card-text">
    <?php echo $_POST["street"]; ?><br>
    <?php echo $_POST["city"]; ?><br>
    <?php echo $_POST["state"]; ?>, <br>
    <?php echo $_POST["code"]; ?><br>
    </p>
    <br>
    <?php echo $_POST["name"];?>
    <a href="../../shoppingCart.php" class="btn btn-primary">Continue Shopping</a>
  </div>
</div>




   


 <!-- Bootstrap core JavaScript -->
 <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>