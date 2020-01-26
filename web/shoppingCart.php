<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>03 Prove: Assignment - Shopping Cart</title>

    <!-- Bootstrap core CSS -->
    <link href="week03/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="week03/css/heroic-features.css" rel="stylesheet">

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
                        <a class="nav-link" href="shoppingCart.php">Home
              <span class="sr-only">(current)</span>
            </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="week03/php/viewCart.php">View Cart</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron my-4">
            <h1 class="display-3">Welcome!</h1>
            <p class="lead">No artificial flavors, no preservatives added, since 1886. Best served chilled at 37 degrees. Perfect size for snacking and on the go .</p>
            <a href="week03/php/viewCart.php" class="btn btn-primary btn-lg">Check Cart!</a>
        </header>
        <form action="week03/php/insertCart.php" method="post">
        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="week03/images/coca-cola.jpg" alt="Coca-Cola">
                    <div class="card-body">
                        <h4 class="card-title">Coca-Cola</h4>
                        <p class="card-text">$1.50</p>
                        qty:<input type="text" name="qty">
                    </div>
                    <div class="card-footer">
                        <input type = "hidden" name="name" value="Coca-Cola" >
                        <input type = "hidden" name="price" value="1.50" >
                        <input type="submit" value="Add to Cart" name="addCart" class="btn btn-primary">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="week03/images/coca-cola-diet.jpg" alt="Coca-Cola">
                    <div class="card-body">
                        <h4 class="card-title">Diet Coke</h4>
                        <p class="card-text">$1.25</p>
                        qty:<input type="text" name="qty">
                    </div>
                    <div class="card-footer">
                        <input type = "hidden" name="name" value="Diet Coke" >
                        <input type = "hidden" name="price" value="1.25" >
                        <input type="submit" value="Add to Cart" name="addCart" class="btn btn-primary">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="week03/images/coca-cola-cherry.jpg" alt="Coca-Cola">
                    <div class="card-body">
                        <h4 class="card-title">Cherry Coke</h4>
                        <p class="card-text">$1.50</p>
                        qty:<input type="text" name="qty">
                    </div>
                    <div class="card-footer">
                        <input type = "hidden" name="name" value="Cherry Coke" >
                        <input type = "hidden" name="price" value="1.50" >
                        <input type="submit" value="Add to Cart" name="addCart" class="btn btn-primary">
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->
        </form>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Shopping Cart 2020</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="week03/vendor/jquery/jquery.min.js"></script>
    <script src="week03/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>