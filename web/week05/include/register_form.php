<?php


$username = $_POST['username'];

$password = $_POST['password'];

$fname = $_POST['fname'];

$lname = $_POST['lname'];

$email = $_POST['email'];

if (!isset($username) || $username == ""
    || !isset($password) || $password == ""
    || !isset($fname) || $fname == ""
    || !isset($lname) || $lname == ""
    || !isset($email) || $email == "")

{

	header("Location: register.php");

	die(); // we always include a die after redirects.

}



$username = htmlspecialchars($username);



// Get the hashed password.

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);



// Connect to the database

require("db.php");

$db = get_db();



$sql = 'INSERT INTO members(username, password, fname, lname, email) VALUES(:username, :password, :fname, :lname, :email)';

$statement = $db->prepare($sql);

$statement->bindValue(':username', $username);

$statement->bindValue(':password', $hashedPassword);
$statement->bindValue(':fname', $fname);
$statement->bindValue(':lname', $lname);
$statement->bindValue(':email', $email);


$statement->execute();




// redirect them to the login page

header("Location: ../../login.php");

die(); 



?>