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



    <form class="needs-validation" action="confirmation.php" method="POST">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Street</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Street name" name="street" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip03">City</label>
      <input type="text" class="form-control" id="validationTooltip03" placeholder="City" name="city" required>
      <div class="invalid-tooltip">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">State</label>
      <input type="text" class="form-control" id="validationTooltip04" placeholder="State" name="state" required>
      <div class="invalid-tooltip">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">Zip</label>
      <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" name="code" required>
      <div class="invalid-tooltip">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <input name="formSubmit" type="submit" class="btn btn-primary" value="Submit"> 
</form>







 <!-- Bootstrap core JavaScript -->
 <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>