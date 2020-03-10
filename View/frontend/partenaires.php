<?php 
$title = "Agir - Nos partenaires";
?>

<?php ob_start(); ?>

<!--<div class="container-fluid startingScreen d-flex justify-content-between align-items-center">
            <div class="container d-flex justify-content-around align-items-center">
                <div class="heading">
                    <h1 class="mb-4">Nos partenaires</h1>
                    <p class="mb-4">
                        Nous entretenons une relation de <br>
                        collaboration avec nos partenaires afin <br>
                        de mettre en commun nos forces ainsi <br>
                        que nos ressources pour mieux vous <br>
                        servir.
                    </p>
                </div>
                <div class="heading-image">
                    <img src="public/images/partenaires.png" alt="partenaires image">
                </div>
            </div>
</div>-->
<div class="container-fluid offerScreen px-0">
    <div class="jumbotron partners-jumbotron p-0 m-0">
        <h1><em>Partenaires</em></h1>
    </div>
</div>

<?php $startScreen = ob_get_clean(); ?>

<?php ob_start(); ?>
<section class="site-path">
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex align-items-center">
                <p><em><a href="index.php">Accueil</a> / <strong>Partenaires</strong></em></p>
            </div>
        </div>
    </div>
</section>
<section class="container mb-5 d-flex justify-content-center align-items-center" id="company-parteners">
    <div>
        <div class="titleh2">
            <h2>Nos partenaires</h2>
        </div>
        <div class="parteners-introduction text-center">
            <p class="mb-4">
                Nous entretenons une relation de
                collaboration avec nos partenaires afin
                de mettre en commun nos forces ainsi <br>
                que nos ressources pour mieux vous <br>
                servir.
            </p>
        </div>
            <div class="row text-center">
                <?php 
                    while($data = $partners->fetch()){
                ?>
                    <div class="col-md-4 my-4">
                        <img src="<?= $data['logo'] ?>" width='150px' height='auto' alt="logo partenaire">
                    </div>
                <?php
                    }
                    $partners->closeCursor();
                ?>

            </div>
    </div>
</section>

<?php $content = ob_get_clean();

require('template.php');

?>