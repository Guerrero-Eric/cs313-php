<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "social_network_app";

$link = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($link === false) {
    die("ERROR: Could not connect to database. " . mysqli_connect_error());
}
?>