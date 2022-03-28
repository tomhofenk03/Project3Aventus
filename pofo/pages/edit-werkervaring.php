<?php
include "../includes/header.php";

?>

    <main> 
        
        <section class="persoonlijke-info">
            <div class="container center-text">

                <h2 class="heading-secondary"> Werkervaring</h2>
                <p class="section-description"> Vertel hier jouw werkervaring! </p>
            </div>
            
            <div class="container">
                <div class="editpage">

                    <div class="grid grid--2-cols">
                        <form class="persoonlijke-info-form">
                            <p class="persoonlijke-info-title">De informatie</p>
                            <input type="text" class="fopleiding" name="opleiding" placeholder="Opleiding"> + 
                            <div> 
                                <input type="text" class="fbegindatum" name="begindatum" placeholder="Begin datum"> 
                                <input type="text" class="feinddatum" name="einddatum" placeholder="Eind datum"> 
                            </div>
                            <input type="text" class="fomschrijving" name="omschrijving" placeholder="Omschrijving">
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
                    <p class="edit-pagenumber center-text">4</p>
                 
                </div>
                
                <div class="btn-box">
                    <a  href="edit-opleiding.html"> <button class="btn btn-previouspage"> Terug </button></a>
                    <a  class="btn-position-end" href="edit-vaardigheden.html"> <button class="btn btn-nextpage"> Doorgaan </button></a>
                </div>
            </div>
                
            </div>
        </section>
        </main>
    
        <?php

        include "../includes/footer.php";
        
        ?>