<?php
include "../includes/header.php";

?>

    <main> 
        
        <section class="persoonlijke-info">
            <div class="container center-text">

                <h2 class="heading-secondary"> Adres gegevens</h2>
                <p class="section-description"> Voer hier jouw adresgegevens in </p>
            </div>
            
            <div class="container">
                <div class="editpage">

                    <div class="grid grid--2-cols">
                        <form class="persoonlijke-info-form">
                            <p class="persoonlijke-info-title">De informatie</p>
                                    <input type="text" class="fstraat" name="straat" placeholder="Straat + huisnummer"> 
                                <div class="grid grid--2-cols">
                                    <input type="text" class="fwoonplaats" name="woonplaats" placeholder="Woonplaats"> 
                                    <input type="text" class="fpostcode" name="postcode" placeholder="Postcode"> 
                                </div>
                                <div class="grid grid--2-cols">

                                    <input type="text" class="fprovincie" name="provincie" placeholder="Provincie"> 
                                    <input type="text" class="fland" name="land" placeholder="Land"> 
                                </div>
                        </form>
                    
                    <div>
                        <p class="persoonlijke-info-title"> De vormgeving</p>
                        <p>Lettertype</p>
                        <p>Kleur</p>
                        <p>Grootte</p>
                        <p>Opmaak</p>
                        <p>Plaatsing</p>

    </p>

                    </div>                    
                    
                </div>
                    <p class="edit-pagenumber center-text">2</p>
                 
                </div>
                
                <div class="btn-box">
                    <a   href="edit-personal.html"> <button class="btn btn-previouspage"> Terug </button></a>
                    <a class="btn-position-end" href="edit-opleiding.html"> <button class="btn btn-nextpage"> Doorgaan </button></a>

                </div>
            </div>
                
            </div>
        </section>
       
</main>

<?php

include "../includes/footer.php";

?>