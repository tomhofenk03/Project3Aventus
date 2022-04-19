<?php
    include_once "../includes/header.php";
    include "../includes/connect.php";

?>


<main class="portfolio">

<h1 class="portfolio-title center-text"> Portfolio <?php echo isset($_SESSION['naam']) ? $_SESSION['naam'] : "" ?> </h1>

<!-- PERSOONLIJKE GEGEVENS -->
    <div class="container grid">
        <div class="portfolio-box">
            
            <p class="portfolio-text"><ion-icon class="portfolio-icon"name="person-outline"></ion-icon> <strong> Persoonlijke informatie </strong> </p>
            
            <div class="grid grid--2-cols">
                <p class="portfolio-text"> Geboorteplaats </p>
                <?php echo isset($_SESSION['geboorteplaats']) ? $_SESSION['geboorteplaats'] : "" ?>
            </div>

            <div class="grid grid--2-cols">
                <p class="portfolio-text"> Geboortedatum </p>
                <?php echo isset($_SESSION['geboortedatum']) ? $_SESSION['geboortedatum'] : "" ?>
            </div>
            
            <div class="grid grid--2-cols">
                <p class="portfolio-text"> Nationaliteit </p>
                <?php echo isset($_SESSION['nationaliteit']) ? $_SESSION['nationaliteit'] : "" ?>
            </div>
            
            <div class="grid grid--2-cols">
                <p class="portfolio-text"> Rijbewijs  </p>
                <?php echo isset($_SESSION['rijbewijs']) ? $_SESSION['rijbewijs'] : "" ?>
            </div>

        </div>

<!-- ADRESGEGEVENS -->

        <div class="portfolio-box">
            
        <p class="portfolio-text"> <ion-icon class="portfolio-icon"name="home-outline"></ion-icon><strong> Adresgegevens </strong> </p>

        <div class="grid grid--2-cols">
            <p class="portfolio-text"> Straat + Huisnummer </p>
                <?php echo isset($_SESSION['straat']) ? $_SESSION['straat'] : "" ?>
        </div>

        <div class="grid grid--2-cols">

            <p class="portfolio-text"> Woonplaats </p>
                <?php echo isset($_SESSION['woonplaats']) ? $_SESSION['woonplaats'] : "" ?>
        </div>

        <div class="grid grid--2-cols">
            <p class="portfolio-text"> Postcode </p>
                <?php echo isset($_SESSION['postcode']) ? $_SESSION['postcode'] : "" ?>
        </div>

        <div class="grid grid--2-cols">
            <p class="portfolio-text"> Provincie </p>
                <?php echo isset($_SESSION['provincie']) ? $_SESSION['provincie'] : "" ?>
        </div>

        <div class="grid grid--2-cols">
            <p class="portfolio-text"> Land </p>
                <?php echo isset($_SESSION['land']) ? $_SESSION['land'] : "" ?>
        </div>

        </div>
 <!--OPLEIDINGEN -->
        <div class="portfolio-box">
            <p class="portfolio-text"><ion-icon class="portfolio-icon" name="school-outline"></ion-icon> <strong> Opleidingen </strong> </p>

            <div class="grid grid--2-cols">
                <p class="portfolio-text"> Opleiding </p>
                    <?php echo isset($_SESSION['opleiding']) ? $_SESSION['opleiding'] : "" ?>
            </div>

            <div class="grid grid--2-cols">

                <p class="portfolio-text"> Begindatum </p>
                <p class="portfolio-text"> Einddatum </p>
            </div>
            
            <div class="grid grid--2-cols">
                <?php echo isset($_SESSION['begindatum_opleiding']) ? $_SESSION['begindatum_opleiding'] : "" ?>
                <?php echo isset($_SESSION['einddatum_opleiding']) ? $_SESSION['einddatum_opleiding'] : "" ?>
            </div>

            <div class="grid grid--2-cols">
                <p class="portfolio-text"> Omschrijving </p>
                    <?php echo isset($_SESSION['omschrijving_opleiding']) ? $_SESSION['omschrijving_opleiding'] : "" ?>
            </div>

            <!-- <div>
                <p class="portfolio-text"> Opleiding </p>
                <p class="portfolio-text"> Begin datum </p>
                <p class="portfolio-text"> Eind datum </p>
                <p class="portfolio-text"> Omschrijving </p>
            </div> -->


        </div>

 <!--WERKERVARING -->

        <div class="portfolio-box">
            <p class="portfolio-text"><ion-icon class="portfolio-icon"name="briefcase-outline"></ion-icon> <strong> Werkervaring </strong> </p>
            <div class="grid grid--2-cols">
                <p class="portfolio-text"> Werkgever </p>
                    <?php echo isset($_SESSION['werkervaring']) ? $_SESSION['werkervaring'] : "" ?>
            </div>

            <div class="grid grid--2-cols">

                <p class="portfolio-text"> Begindatum </p>
                <p class="portfolio-text"> Einddatum </p>
            </div>
            
            <div class="grid grid--2-cols">
                <p> <?php echo isset($_SESSION['begindatum_werkervaring']) ? $_SESSION['begindatum_werkervaring'] : "" ?></p>
                <p> <?php echo isset($_SESSION['einddatum_werkervaring']) ? $_SESSION['einddatum_werkervaring'] : "" ?></p>
            </div>

            <div class="grid grid--2-cols">
                <p class="portfolio-text"> Omschrijving </p>
                    <?php echo isset($_SESSION['omschrijving_werkervaring']) ? $_SESSION['omschrijving_werkervaring'] : "" ?>
            </div>
            </div>
            <!-- <div>
                <p class="portfolio-text"> Werkervaring </p>
                <p class="portfolio-text"> Begin datum </p>
                <p class="portfolio-text"> Eind datum </p>
                <p class="portfolio-text"> Omschrijving </p>
            </div> -->
    </div>
    
    
    
</main>


<?php

include "../includes/footer.php";

?>