<?php
include_once "../includes/header.php";
include "../includes/connect.php"; 


?>

    <main> 
        
        <section class="persoonlijke-info">
            <div class="container center-text">

                <h2 class="heading-secondary"> Vaardigheden</h2>
                <p class="section-description"> Wat zijn jouw vaardigheden? </p>
            </div>
            
            <div class="container">
                <div class="editpage">

                    <div class="grid grid--2-cols">
                        <form class="persoonlijke-info-form" action="../pages/edit-vaardigheden2.php" method="POST">
                            <p class="persoonlijke-info-title">De informatie</p>
                            <div id="txtField">

                                <input type="text" class="fvaardigheden" name="vaardigheden" placeholder="Vaardigheden"> 
                                </div>
                              
                                <button type="button" class="btn btn--small" onclick="AddExtraVaardigheid()"> + </button>
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
                    <p class="edit-pagenumber center-text">5</p>
                 
                </div>
                
                <div class="btn-box">
                    <a  href="../pages/edit-werkervaring.php"> <button class="btn btn-previouspage"> Terug </button></a>
                    <a  class="btn-position-end" href="../pages/edit-hobby.php"> <button class="btn btn-nextpage"> Doorgaan </button></a>
                </div>
            </div>
                
            </div>
        </section>
        </main>
       

        <?php

        include "../includes/footer.php";
        
        ?>