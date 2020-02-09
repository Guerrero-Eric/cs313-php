<?php
// Include db file
require_once "db.php";

// Define variables and initialize with empty values
$username = $password = $confirm_password = $fname = $lname = $email = "";
$username_err = $password_err = $confirm_password_err = $fname_err = $lname_err = $email_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM members WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have atleast 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Validate first name
    if (empty(trim($_POST["fname"]))) {
        $fname_err = "Please enter first name.";
    } elseif (strlen(trim($_POST["fname"])) < 1) {
        $fname_err = "Please enter a first name.";
    } else {
        $fname = trim($_POST["fname"]);
    }

    // Validate last name
    if (empty(trim($_POST["lname"]))) {
        $lname_err = "Please enter last name.";
    } elseif (strlen(trim($_POST["lname"])) < 1) {
        $lname_err = "Please enter a last name.";
    } else {
        $lname = trim($_POST["lname"]);
    }

    // Validate first name
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your e-mail.";
    } elseif (strlen(trim($_POST["email"])) < 1) {
        $email_err = "Please enter an e-mail.";
    } else {
        $email = trim($_POST["email"]);
    }


    // Check input errors before inserting in database
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err && empty($fname_err) && empty($lname_err) && empty($email_err))) {

        // Prepare an insert statement
        $sql = "INSERT INTO members (username, password, fname, lname, email) VALUES (?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_username, $param_password, $param_fname, $param_lname, $param_email);

            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_fname = $fname;
            $param_lname = $lname;
            $param_email = $email;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to login page
                header("location: ../login.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}
