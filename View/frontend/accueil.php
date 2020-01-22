<?php 
$title = "Agir - Accueil";
 ?>

 <?php ob_start() ?>
    <section class="container startingScreen">
        <div class="heading">
            <h1 class="mb-4">Association Intermediaire <br> A.G.I.R</h1>
            <p class="mb-4">Une association près de chez <br>
                vous pour 
                répondre à tous vos besoins.
            </p>
            <a href="index.php?action=contact">Nous contacter</a>
        </div>
        <div class="heading-image">
            <img src="public/images/img-accueil.png" alt="image accueil">
        </div>
    </section>
 <?php $startScreen = ob_get_clean(); ?>


<?php ob_start(); ?>
    <section class="container" id="about-us">
        <div class="about-us-introduction">
            <div>
                <h2>Qui sommes-nous?</h2>
                <p>AGIR est une Association Intermédiaire, loi 1901, 
                   dont le projet social est de contribuer à l’insertion
                   et au retour à l’emploi. Elle est une Structure
                   d’Insertion par l’Activité Économique (SIAE) 
                   et une entreprise de l’Économie 
                   Sociale et Solidaire(ESS).
                </p>
            </div>
            <div>
                <img src="public/images/home.png" alt="image maison">
            </div>
        </div>
        <div class="about-us-numbers">
            <div>
                <div class="number">
                    5
                </div>
                <p>salariés permanents <br>
                    travaillant pour AGIR </p>
            </div>
            <div>
            <div class="number">
                    70
                </div>
                <p>salariés inscrits dans <br>
                     l'association </p>
            </div>
            <div>
            <div class="number">
                    2000
                </div>
                <p>
                   heures de travail <br>
                   générées par mois <br>
                   en moyenne
                </p>
            </div>
            <div>
            <div class="number">
                    32
                </div>
                <p>années d'expérience </p>
            </div>
        </div>
    </section>
<?php $content = ob_get_clean(); ?>


<?php require('template.php');