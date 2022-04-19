<?php
include_once "../includes/header.php";
include "../includes/connect.php"; 


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
                        <form class="persoonlijke-info-form" action="../pages/edit-pesonal2.php" method="POST">
                            <p class="persoonlijke-info-title">De informatie</p>
                                <input type="text" class="fnaam" name="naam" placeholder="Naam" 
                                value="<?php echo isset($_SESSION['naam']) ? $_SESSION['naam'] : "" ?>"> 
                                <input type="text" class="fgeboorteplaats" name="geboorteplaats" placeholder="Geboorteplaats"
                                value="<?php echo isset($_SESSION['geboorteplaats']) ? $_SESSION['geboorteplaats'] : "" ?>">  
                                <input type="text" class="fgeboortedatum" name="geboortedatum" placeholder="2022-01-01"
                                value="<?php echo isset($_SESSION['geboortedatum']) ? $_SESSION['geboortedatum'] : "" ?>"> 
                                <input type="text" class="fnationaliteit" name="nationaliteit" placeholder="Nationaliteit"
                                value="<?php echo isset($_SESSION['nationaliteit']) ? $_SESSION['nationaliteit'] : "" ?>">  
                                <div class="frijbewijs-box"> <input type="checkbox" class="frijbewijs" name="rijbewijs" value="Behaald">
                                <input type="hidden" name="rijbewijs" value="Niet behaald">  <p class="frijbewijs-text ">Rijbewijs</p>  </div>
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
<p class="edit-pagenumber center-text">1</p>
                 
                </div>
                
                <div class="btn-box grid grid--2-cols">
                    <a  href="../pages/index.php"> <button class="btn btn-previouspage"> Terug </button></a>

                    <a  class="btn-position-end" href="../pages/edit-adress.php"> <button class="btn btn-nextpage" > Doorgaan </button></a>
                </div>
            </div>
                
            </div>
        </section>
        </main>
       
<?php
include "../includes/footer.php";

?>