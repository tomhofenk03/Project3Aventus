<?php
include_once "../includes/header.php";

?>

    <main> 

    <section class="section-contact ">
    <div class="contact-title-box center-text"> 
        <h1 class="heading-primary">Kom je er even niet uit?</h1>
        <p class="subheading ">Stel je vraag en ontvang (meestal) binnen 24 uur een reactie</p>
    </div>
    
        <div class="container grid grid--2-cols">
            
            <div class="contact-description ">
                    <p class="contact-text center-text">Vragen? Opmerkingen? Is er iets niet goed gegaan of kom je er niet uit? Laat het ons weten en wij helpen je zsm verder. We proberen je altijd direct te reageren.</p>
                    <img src="../img/contact.jpg" alt="Social media icons on hand" class="contact-img">
            </div>

            <form action="/action_page.php" method="" class="contact-form " >
                <div class="contact-form-box">
                    <label for="name">Naam:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="contact-form-box  ">
                    <label for="Email">Email:</label>
                    <input type="text" id="Email" name="email" required>
                </div>
                <div class="contact-form-box">
                    <label for="Vragen">Vraag omschrijving:</label>
                    <textarea type="text" id="Vragen" name="Vragen" required></textarea>
                </div>
                <input type="Submit" value="Verzenden" class="btn btn--full2">
            </form> 

        </div>
    </section>
</main>

<?php

include "../includes/footer.php";

?>