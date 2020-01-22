<?php
$title = "Agir - Contact";
?>

<?php ob_start() ?>
    <div class="container startingScreen">
        <div class="heading">
            <h1 class="mb-4">Contactez-nous</h1>
            <p class="mb-4">
                Nous vous répondrons le plus rapidement<br>
                possible à vos questions
            </p>
        </div>
        <div class="heading-image">
            <img src="public/images/contact.png" alt="contact image">
        </div>
    </div>
 <?php $startScreen = ob_get_clean();?> 

 <?php ob_start()?>
    <section class="container" id="company-infos">
        <div class="contact-infos">
            <h2>Ou nous trouver?</h2>
            <div class="address circle">

            </div>
            <div class="opening-hours circle">

            </div>
        </div>
        <div>
            <img src="public/images/location.png" alt="">
        </div>
    </section>



 <?php $content = ob_get_clean();
require('template.php');
?>