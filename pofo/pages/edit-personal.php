<?php
include "../includes/header.php";

?>

    <main> 
        
        <section class="persoonlijke-info">
            <div class="container center-text">

                <h2 class="heading-secondary"> Persoonlijke informatie</h2>
                <p class="section-description"> Vertel ons hier jouw persoonlijke informatie en hoe je dit weergegeven wil hebben op je portfolio! </p>
            </div>
            
            <div class="container">
                <div class="editpage">

                    <div class="grid grid--2-cols">
                        <form class="persoonlijke-info-form">
                            <p class="persoonlijke-info-title">De informatie</p>
                                <input type="text" class="fname" name="Naam" placeholder="Naam"> 
                                <input type="text" class="fwoonplaats" name="geboorteplaats" placeholder="geboorteplaats"> 
                                <input type="text" class="fgeboortedatum" name="geboortedatum" placeholder="Geboortedatum"> 
                                <input type="text" class="fnationaliteit" name="nationaliteit" placeholder="Nationaliteit"> 
                                <div class="frijbewijs-box"> <input type="checkbox" class="frijbewijs" name="rijbewijs" value="rijbewijs-behaald">  <p class="frijbewijs-text ">Rijbewijs</p>  </div>
                        </form>
                    
                    <div>
                        <p class="persoonlijke-info-title "> De vormgeving</p>
                        
                        <div class="grid">

                            <div>
                                <p>Lettertype</p> 
                                <select id="lettertype" name="lettertype">
                                    <option value="Sans serif">Sans Serif</option>
                                    <option value="comic sans">Comic Sans</option>
                                </select>
                            </div>
                            
                            <div>
                                <p>Kleur</p>
                                <div class="vormgeving-colors">
                                    <div class="vormgeving-color-box red"> </div>
                                    <div class="vormgeving-color-box blue"> </div>
                                    <div class="vormgeving-color-box darkgreen"> </div>
                                </div>
                            </div>
                            
                            <p>Grootte</p>
                            <!-- Klein medium groot -->
                            <p>Opmaak</p>
                            <!-- Ronde vorm, rechte vorm  -->
                            <p>Plaatsing                         
                            </p>
                            <!-- Recht links midden -->


                            
</div>
</div>                    

</div>
<p class="edit-pagenumber center-text">1</p>
                 
                </div>
                
                <div class="btn-box grid grid--2-cols">
                    <a  href="#"> <button class="btn btn-previouspage"> Terug </button></a>

                    <a  class="btn-position-end" class="link-to-next-page" href="edit-adress.html"> <button class="btn btn-nextpage"> Doorgaan </button></a>
                </div>
            </div>
                
            </div>
        </section>
        </main>
       
        <?php

        include "../includes/footer.php";
        
        ?>