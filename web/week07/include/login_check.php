<?php
session_start();

$badLogin = false;
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Connect to the DB
    require("functions.php");
    $db = get_db();
    $sql = 'SELECT password FROM members WHERE username=:username';
    $statement = $db->prepare($sql);
    $statement->bindValue(':username', $username);
    $result = $statement->execute();
    if ($result) {
        $row = $statement->fetch();
        $hashedPassword = $row['password'];
        // now check to see if the hashed password matches
        if (password_verify($password, $hashedPassword)) {
            // password was correct, put the user on the session, and redirect to home
            $_SESSION['username'] = $username;
            header("Location: ../profile.php");
            die(); // we always include a die after redirects.
        } else {
            header("Location: ../login.php");
            die();
            $badLogin = true;
        }
    } else {
        $badLogin = true;
    }
}
