<?php
$title = "Agir - Contact";
?>

<?php ob_start() ?>
    <div class="container-fluid startingScreen d-flex justify-content-between align-items-center">
        <div class="container d-flex justify-content-around align-items-center">
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
    </div>
 <?php $startScreen = ob_get_clean();?> 

 <?php ob_start()?>
    <section class="container" id="company-infos">
        <div class="contact-infos">
            <h2>Ou nous trouver?</h2>
            <div class="address circle">
                <h5>Adresse</h5>
                <p>31 rue de la pierre trouée <br>
                   62630 Etaples-sur-mer</p>
                <h5>Email</h5>
                <p>association.agir.etaples@wanadoo.fr</p>
                <h5>Téléphone</h5>
                <p>03 21 94 69 47</p>
            </div>
            <div class="opening-hours circle">
                <h5>Horaires d'ouvertures</h5>
                <p>
                    Lundi : 8h-12h  13h30-17h <br>
                    Mardi : 8h-12h  13h30-17h <br>
                    Mercredi : 8h-12h  13h30-17h <br>
                    Jeudi : 8h-12h  13h30-17h <br>
                    Vendredi : 8h-12h  13h30-17h 
                </p>
            </div>
        </div>
        <div>
            <img src="public/images/location.png" alt="">
        </div>
    </section>
    <section class="container-fluid" id="company-location">
        <div class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2536.7427181396088!2d1.6393592157003996!3d50.520353779485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ddd0167fa7c05f%3A0x1074d1f449d3b040!2s31%20Rue%20de%20la%20Pierre%20Trou%C3%A9e%2C%2062630%20%C3%89taples!5e0!3m2!1ssv!2sfr!4v1579681645516!5m2!1ssv!2sfr" frameborder="0" allowfullscreen=""></iframe>
        </div>
    </section>
    <section class="container-fluid d-flex justify-content-around p-5 my-5 align-items-center" id="company-form">
        <div class="left-shape">
            <h3>Nous contacter</h3>
            <p>N'hésitez pas à nous contacter, <br>
                nous vous répondrons <br>
                dans les plus brefs delais
            </p>
        </div>
        <div class="form">
            <form action="blabla.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Nom prénom">
                </div>
                <div class="row">
                    <div class="col">
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
                        <small id="emailHelp" class="form-text text-muted">Votre email ne sera jamais partagé</small>
                    </div>
                    <div class="col">
                        <input type="tel" class="form-control" id="phone" placeholder="Téléphone">
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" name="objet" id="objet" placeholder="Objet">
                </div>
                <div class="form-group">
                    <textarea class="form-control rounded-0" id="message" rows="10" placeholder="Votre message"></textarea>
                </div>
                <div class="form-group d-flex justify-content-center mt-5">
                    <div class="g-recaptcha" data-sitekey="6LcZA9IUAAAAAPLt5K8BJOcNyw1sTzfTYdzVDY54"></div>
                </div>
                <br/>
                <div class="form-group d-flex justify-content-center my-3">
                    <button type="submit">Envoyer</button>
                </div>
            </form>
        </div>
    </section>


 <?php $content = ob_get_clean();
require('template.php');
?>