<?php
include "../includes/header.php";

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
                        <form class="persoonlijke-info-form">
                            <p class="persoonlijke-info-title">De informatie</p>
                                <input type="text" class="fvaardigheden" name="vaardigheden" placeholder="Vaardigheden"> 
                            
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
                    <p class="edit-pagenumber center-text">5</p>
                 
                </div>
                
                <div class="btn-box">
                    <a  href="edit-werkervaring.html"> <button class="btn btn-previouspage"> Terug </button></a>
                    <a  class="btn-position-end" href="edit-hobby.html"> <button class="btn btn-nextpage"> Doorgaan </button></a>
                </div>
            </div>
                
            </div>
        </section>
        </main>
       

        <?php

        include "../includes/footer.php";
        
        ?>