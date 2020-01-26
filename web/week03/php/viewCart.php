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

    <h2 align="center">Your Cart</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Sno</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $bill=0;
                $sno=1;
                foreach($_SESSION as $products){
                    $p = 0;
                    $q = 0;
                    echo "<tr>";
                        echo "<td>".($sno++)."</td>";
                        echo "<form action='editCart.php' method='post'>";
                        foreach($products as $key => $value) {
                        if($key == 2){
                            echo "<td><input type='text' name='name$key' class='form-control' value='".$value."'></td>";
                            $q = $value;
                        }else if($key == 1){
                            echo "<input type='hidden' name='name$key' value='".$value."'>";
                            echo "<td>".$value."</td>";
                            $p = $value;
                        }else if($key == 0){
                            echo "<input type='hidden' name='name$key' value='".$value."'>";
                            echo "<td>".$value."</td>";
                        }
                    }
                    $bill = ($q + $p);
                    echo "<td>".($bill)."</td>";
                    echo "<td><input type='submit' name='event' value='Update' class='btn btn-warning'></td>";
                    echo "<td><input type='submit' name='event' value='Remove' class='btn btn-danger'></td>";
                    echo "</form>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

    <a href="../../shoppingCart.php" class="btn btn-primary">Continue Shopping</a>
    <a href="checkout.php" class="btn btn-primary">Checkout</a>


 <!-- Bootstrap core JavaScript -->
 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>