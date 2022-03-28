<?php
include "../includes/header.php";

?>

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

                    <p class="login-form-sidenote">Nog geen account? <a href="register.php">Registreer</a></p>
                    
            </form>
        </div>
    </section>

<?php

include "../includes/footer.php";

?>