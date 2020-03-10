<?php
$title = "Agir - Contact";
?>

<?php ob_start() ?>
<div class="container-fluid offerScreen px-0">
    <div class="jumbotron contact-jumbotron p-0 m-0">
        <h1><em>Contactez nous!</em></h1>
    </div>
</div>
 <?php $startScreen = ob_get_clean();?> 

 <?php ob_start()?>
 <section class="site-path">
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex align-items-center">
                <p><em><a href="index.php">Accueil</a> / <strong>Contact</strong></em></p>
            </div>
        </div>
    </div>
</section>
    <section class="container" id="company-infos">
        <div class="contact-infos">
            <div class="titleh2">
                <h2>Ou nous trouver?</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
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
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <img class="contactpage-img" src="public/images/location.png" alt="">
                </div>
        
        </div>
    </section>
    <section class="container-fluid m-0 p-0" id="company-location">
        <div class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2536.7427181396088!2d1.6393592157003996!3d50.520353779485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ddd0167fa7c05f%3A0x1074d1f449d3b040!2s31%20Rue%20de%20la%20Pierre%20Trou%C3%A9e%2C%2062630%20%C3%89taples!5e0!3m2!1ssv!2sfr!4v1579681645516!5m2!1ssv!2sfr" frameborder="0" allowfullscreen=""></iframe>
        </div> 
    </section>
    <section class="container my-5 py-5" id="company-form">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <img src="public/images/contactform.png" alt="">
            </div>
            <div class="form col-md-6">
                <form action="blabla.php" method="POST">
                    <h5 class="text-center my-3">N'HESITEZ PAS A NOUS CONTACTER !</h5>
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
                    <div class="form-group d-flex justify-content-center my-2">
                        <div class="g-recaptcha" data-sitekey="6LcZA9IUAAAAAPLt5K8BJOcNyw1sTzfTYdzVDY54"></div>
                    </div>
                    <br/>
                    <div class="form-group d-flex justify-content-center">
                        <button type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    

 <?php $content = ob_get_clean();
require('template.php');
?>