<?php
include_once "../includes/header.php";
include "../includes/connect.php"; 

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

                        <form class="persoonlijke-info-form" action="../pages/edit-adress2.php" method="POST">
                            <p class="persoonlijke-info-title">De informatie</p>
                                    <input type="text" class="fstraat" name="straat" placeholder="Straat + huisnummer"
                                    value="<?php echo isset($_SESSION['straat']) ? $_SESSION['straat'] : "" ?>" required>
                                <div class="grid grid--2-cols">
                                    <input type="text" class="fwoonplaats" name="woonplaats" placeholder="Woonplaats"
                                    value="<?php echo isset($_SESSION['woonplaats']) ? $_SESSION['woonplaats'] : "" ?>"required> 
                                    <input type="text" class="fpostcode" name="postcode" placeholder="Postcode"
                                    value="<?php echo isset($_SESSION['postcode']) ? $_SESSION['postcode'] : "" ?>"required>  
                                </div>
                                <div class="grid grid--2-cols">

                                    <input type="text" class="fprovincie" name="provincie" placeholder="Provincie"
                                    value="<?php echo isset($_SESSION['provincie']) ? $_SESSION['provincie'] : "" ?>"required>  
                                    <input type="text" class="fland" name="land" placeholder="Land"
                                    value="<?php echo isset($_SESSION['land']) ? $_SESSION['land'] : "" ?>"required>  
                                </div>
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
                    <p class="edit-pagenumber center-text">2</p>
                 
                </div>
                
                <div class="btn-box">
                    <a   href="../pages/edit-personal.php"> <button class="btn btn-previouspage"> Terug </button></a>
                    <a class="btn-position-end" href="../pages/edit-opleiding.php"> <button class="btn btn-nextpage"> Doorgaan </button></a>

                </div>
            </div>
                
            </div>
        </section>
       
</main>

<?php

include "../includes/footer.php";

?>