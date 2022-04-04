<?php

require_once "../includes/config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["user"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["user"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["user"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["user"]);
                }
            } else{
                echo "Oopsie woopsie! Something went wrong. Please try again later UwU.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["user_pass"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["user_pass"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["user_pass"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["user_pass_confirm"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["user_pass_confirm"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: index.php");
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

                    <div class="login-form-box grid grid--2-cols">
                        <p class="login-form-titles">Bevestig wachtwoord:</p>
                        <input type="password" name="user_pass_confirm" placeholder="Enter Password Here" required>
                    </div>
                    
                    <input type="submit" name="submit" value="Registreer" class="btn btn--full2">

                    <p class="login-form-sidenote">Heb je al een account? <a href="loginpage.php">Log in</a></p>
                    
            </form>
        </div>
    </section>

<?php

include "../includes/footer.php";

?>