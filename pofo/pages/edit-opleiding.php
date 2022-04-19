<?php
include_once "../includes/header.php";
include "../includes/connect.php"; 

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
                        <form class="persoonlijke-info-form" action="../pages/edit-opleiding2.php" method="POST">
                            <p class="persoonlijke-info-title">De informatie</p>
                                <input type="text" class="fopleiding" name="opleiding" placeholder="Opleiding"
                                value="<?php echo isset($_SESSION['opleiding']) ? $_SESSION['opleiding'] : "" ?>">  
                                <div> <input type="text" class="fbegindatum" name="begindatum_opleiding" placeholder="Begin datum"
                                value="<?php echo isset($_SESSION['begindatum_opleiding']) ? $_SESSION['begindatum_opleiding'] : "" ?>">  -
                                <input type="text" class="feinddatum" name="einddatum_opleiding" placeholder="Eind datum"
                                value="<?php echo isset($_SESSION['einddatum_opleiding']) ? $_SESSION['einddatum_opleiding'] : "" ?>"> 
                            </div>
                                <input type="text" class="fomschrijving" name="omschrijving_opleiding" placeholder="Omschrijving"
                                value="<?php echo isset($_SESSION['omschrijving_opleiding']) ? $_SESSION['omschrijving_opleiding'] : "" ?>"> 
                                <button type="button" class="btn btn--small" > + </button>
                                
                                <input  type="submit" value="Opslaan" class="btn btn-opslaan">
                        </form>
                        <div>
                        <p class="persoonlijke-info-title "> De vormgeving </p>
                        
                        <div class="vormgeving-box">

                            <p class="vormgeving-box-title" >Lettertype</p> 
                            <div class="vormgeving-options-box">
                                <select id="lettertype" name="lettertype">
                                    <option value="Sans serif">Sans Serif</option>
                                    <option value="comic sans">Comic Sans</option>
                                    <option value="Century Gothic">Century Gothic</option>
                                    <option value="Arial">Arial</option>
                                </select>
                            </div>
                            
                                <p class="vormgeving-box-title" >Kleur</p>
                                <div class="vormgeving-colors">
                                    <div class="vormgeving-color-box pink"> </div>
                                    <div class="vormgeving-color-box blue"> </div>
                                    <div class="vormgeving-color-box darkgreen"> </div>
                                </div>
                            
                            <p class="vormgeving-box-title">Grootte</p>
                            <div class="vormgeving-options-box">
                                <input type="checkbox" class="vormgeving-checkbox"  name="vormgeving"> 12px    
                                <input type="checkbox" class="vormgeving-checkbox"  name="vormgeving">24px   
                                <input type="checkbox" class="vormgeving-checkbox"  name="vormgeving"> 36px 
                            </div>
                            <!-- Klein medium groot -->
                            <p class="vormgeving-box-title">Opmaak</p>
                            <div class="vormgeving-options-box">
                                <input type="checkbox" class="vormgeving-checkbox"  name="vormgeving">Ronde hoeken 
                                <input type="checkbox" class="vormgeving-checkbox"  name="vormgeving">Rechte hoeken
                            </div>

                            <!-- Ronde vorm, rechte vorm  -->
                            <p class="vormgeving-box-title">Plaatsing </p>
                              <div class="vormgeving-options-box">
                                <input type="checkbox" class="vormgeving-checkbox"  name="vormgeving"> Rechts uitlijnen
                                <input type="checkbox" class="vormgeving-checkbox"  name="vormgeving">Links uitlijnen
                                <input type="checkbox" class="vormgeving-checkbox"  name="vormgeving">Centreren
                            </div>
                            <!-- Recht links midden -->


                            
</div>
</div>                                       
                    
                </div>
                    <p class="edit-pagenumber center-text">3</p>
                 
                </div>
                
                <div class="btn-box">
                    <a  href="../pages/edit-adress.php"> <button class="btn btn-previouspage"> Terug </button></a>
                    <a class="btn-position-end" href="../pages/edit-werkervaring.php"> <button class="btn btn-nextpage"> Doorgaan </button></a>
                </div>
            </div>
                
            </div>
        </section>
       </main>

        <?php

        include "../includes/footer.php";
        
        ?>