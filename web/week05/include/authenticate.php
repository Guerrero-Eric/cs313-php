<?php

// connect to the database

require_once('db.php');



// recieve the username and password

$username = htmlspecialchars($_POST["username"]);

$password = htmlspecialchars($_POST["password"]);



// authenticate user credentials

$statement = $link->prepare("SELECT id, username, password FROM members

                           WHERE username = :username");

$statement->bindValue(":username", $username, PDO::PARAM_STR);

$statement->execute();



// get the password

$row = $statement->fetch(PDO::FETCH_ASSOC);

$passwordHashed = $row['password'];

$id = $row['id'];





// if login is succesful begin the session and head to the user profile

if(password_verify($password, $passwordHashed)){

  session_start();

  $_SESSION["username"] = $username;

  $_SESSION["id"] = $id;



  header("Location: user.php");

}

else { // else we return to the login screen

  header("Location: ../../login.php");

}



?>