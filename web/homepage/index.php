<!DOCTYPE html>
<html lang="en">

<head>
    <title>Homepage</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="bg"></div>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Portfolio</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="cs313/index.html">CS 313</a></li>
                <li><a href="#">Link</a></li>
            </ul>
           
        </div>
    </nav>
    <ul class="navbar-right">
                <?php
                echo date("Y/m/d") . "<br>";
                ?>
            </ul>
    <div class="container text-center">
        <h3>Eric Guerrero</h3>
        <p><em>We love music!</em></p>
        <p>Welcome to my website. Hello, I'm a junior stydying Software Engineering at Brigham Young University Idaho in the East Idaho..</p>
        <br>

        <div class="row">
            <div class="col-sm-4">
                <p><strong>Eric Guerrero</strong></p><br>
                <a href="#my_Profile" data-toggle="collapse">
                    <img src="image/me.jpg" class="img-circle profile" alt="Eric" width="255" height="255" onclick="profile()">
                </a>
                <div id="my_Profile" class="collapse"></div>
            </div>
            <br>
            <div class="col-sm-8 text-left">
                <p>
                    <br> I love to solve problems. Wheter it's finding the most elegant way to write a line of code or figuring
                    out which ingredient
                    goes well with my recipe, I love the challenge of finding a way and discovering solutions. Maybe that's why I
                    love writing and the
                    satisfaction that comes from finding just the right word; or why I study psychology and rationality in my
                    spare time to figure out
                    how people think. As long as there's a problem to solve or a challenge to puzzle over, it's bound to be
                    something I love!
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="script.js"></script>
</body>

</html