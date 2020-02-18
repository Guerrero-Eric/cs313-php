<?php
// Include db file
require_once "db.php";
 
// Define variables and initialize with empty values
$param_username = htmlspecialchars($_POST["username"]);
$username = $password = $confirm_password = $fname = $lname = $email = "";
$username_err = $password_err = $confirm_password_err = $fname_err = $lname_err = $email_err = "";
// Set parameters

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        
        // Prepare a select statement
        $sql = "SELECT id FROM members WHERE username = :username";
      
        
        if( $stmt = $link->prepare($sql) ) {
            // Bind variables to the prepared statement as parameters
            $stmt->bindValue(":username", $username, PDO::PARAM_STR);

             // Set parameters
             $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                

                
                if($row = $stmt->fetch() == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
// Validate first name
if(empty(trim($_POST["fname"]))){
    $fname_err = "Please enter first name.";     
} elseif(strlen(trim($_POST["fname"])) < 1){
    $fname_err = "Please enter a first name.";
} else{
    $fname = trim($_POST["fname"]);
}

// Validate last name
if(empty(trim($_POST["lname"]))){
    $lname_err = "Please enter last name.";     
} elseif(strlen(trim($_POST["lname"])) < 1){
    $lname_err = "Please enter a last name.";
} else{
    $lname = trim($_POST["lname"]);
}

// Validate first name
if(empty(trim($_POST["email"]))){
    $email_err = "Please enter your e-mail.";     
} elseif(strlen(trim($_POST["email"])) < 1){
    $email_err = "Please enter an e-mail.";
} else{
    $email = trim($_POST["email"]);
}


    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err && empty($fname_err) && empty($lname_err) && empty($email_err))){
        
        $sql = "INSERT INTO members (username, password, fname, lname, email) VALUES (?, ?, ?, ?, ?)";
        

        if($stmt = $link->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bindValue(":param_username", $param_username,PDO::PARAM_STR);   
            $stmt->bindValue(":param_password",$param_password,PDO::PARAM_STR);
            $stmt->bindValue(":param_fname",$param_fname,PDO::PARAM_STR);
            $stmt->bindValue(":param_lname",$param_lname,PDO::PARAM_STR);
            $stmt->bindValue(":param_email",$param_email, PDO::PARAM_STR);
                
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_fname = $fname;
            $param_lname = $lname;
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: ../../login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
    }
    
}
?>