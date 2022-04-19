<?php
include_once "../includes/header.php";

?>

    <main> 

        <section class="section-hero">
            <div class="hero">
    
            <div class="hero-text-box">
                <h1 class="heading-primary">Maak gemakkelijk je portfolio met POFO</h1>
                <ul class="hero-list">
                    <li class="hero-list-item"><ion-icon name="arrow-forward-outline" class="icon-hero"></ion-icon>Perfect voor studenten</li>
                    <li class="hero-list-item"><ion-icon name="arrow-forward-outline" class="icon-hero"></ion-icon>Laat zien wie je bent</li>
                    <li class="hero-list-item"><ion-icon name="arrow-forward-outline" class="icon-hero"></ion-icon> Solliciteer al een professional</li>
                </ul>
                    
                <a href="../pages/edit-personal.php" class="btn btn--full margin-right-sm">Maak jouw portfolio!</a>
                <a href="#cta" class="btn btn--full margin-right-sm">Download portfolio</a>
            </div>
            
            <div class="hero-img-box">
                    <img src="../img/pofohero.png" class="hero-img" alt="Logo of POFO on a piece of paper"> 
            </div>
            </div>
        </section>

        <section class="section-templates">
            <div class="container">
                <p class="heading-secondary"> Voorbeeld portfolio's </p>
                <div class="template-box grid grid--3-cols">

                    <img src="../img/portfolio-template2.jpg" alt="" class="template-img">
                    <img src="../img/portfolio-template1.jpg" alt="" class="template-img">
                    <img src="../img/portfolio-template3.jpg" alt="" class="template-img">
                </div>
            </div>



        </section>

        <section class="section-howitworks" id="section-howitworks">
            <div class="container">
                <p class="heading-secondary">Hoe werkt POFO?</p>
                
                <div class="grid grid--2-cols">
                    <img src="../img/mensen.jpg" alt="Two woman sitting at a table, looking a a laptop screen" class="howitworks-img">
                    <p class="howitworks-text center-text"> <strong> POFO werkt supersimpel!</strong> <br><br> Klik <a class="link" href="../pages/edit-adress.php"> hier </a> om naar de bewerk pagina te gaan en vul alle informatie in die gevraagd word. <br> <br> Kies zelf in welke kleur, welk lettertype of wel formaat dit op je portfolio gezet moet worden.  <br> <br> Zo stel je snel en gemakkelijk je eigen portfolio website samen! </p>
                </div >
                
            </div>
        </section>

    </main>

    <?php

include "../includes/footer.php";

?>