<?php
include "../includes/header.php";

?>

    <main> 
        
        <section class="persoonlijke-info">
            <div class="container center-text">

                <h2 class="heading-secondary"> Opleiding(en)</h2>
                <p class="section-description"> Geef hier alle opleidingen aan die je gevolgt hebt </p>
            </div>
            <div class="container">
                <div class="editpage">

                    <div class="grid grid--2-cols">
                        <form class="persoonlijke-info-form">
                            <p class="persoonlijke-info-title">De informatie</p>
                                <input type="text" class="fopleiding" name="opleiding" placeholder="Opleiding"> + 
                                <div> <input type="text" class="fbegindatum" name="begindatum" placeholder="Begin datum"> -
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


                    </div>                    
                    
                </div>
                    <p class="edit-pagenumber center-text">3</p>
                 
                </div>
                
                <div class="btn-box">
                    <a  href="edit-adress.html"> <button class="btn btn-previouspage"> Terug </button></a>
                    <a class="btn-position-end" href="edit-werkervaring.html"> <button class="btn btn-nextpage"> Doorgaan </button></a>
                </div>
            </div>
                
            </div>
        </section>
       </main>

        <?php

        include "../includes/footer.php";
        
        ?>