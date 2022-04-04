<?php
session_start();
 
// Include config file
require_once "../includes/config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";


 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["user"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["user"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["user_pass"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["user_pass"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["user"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: index.php");
                            exit;
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <title>Pofo &mdash; Easily create your portfolio </title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="../css/general.css" type="text/css">
    <link rel="stylesheet" href="../css/queries.css" type="text/css">
</head>
<body>

    <header class="header ">
        <a href="../pages/index.php"> 
            <img class="logo" alt="POFO logo"  src="../img/pofologo.png"/>
        </a>
        

        <button class="btn-mobile-nav">
            <ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
            <ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
        </button>
    </header>

    <main>
    
    <section class="section-login grid">
        <div class="container">


            
            <form class="login-form" action="" method="post">
                <h1 class="heading-primary" >Inloggen</h1>
                
                    <div class="login-form-box grid grid--2-cols">
                        <p class="login-form-titles">Gebruikersnaam:</p>
                        <input type="text" name="user" placeholder="Enter name Here" required>
                    </div>

                    <div class="login-form-box grid grid--2-cols">
                        <p class="login-form-titles">Wachtwoord:</p>
                        <input type="password" name="user_pass" placeholder="Enter Password Here" required>
                    </div>
                    
                    <input type="submit" name="submit" value="Login" class="btn btn--full2">

                    <p class="login-form-sidenote">Nog geen account? <a href="registratie.php">Registreer</a></p>
                    
            </form>
        </div>
    </section>

<?php

include "../includes/footer.php";

?>