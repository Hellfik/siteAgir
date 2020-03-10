<?php 
$title = "Agir - Accueil";
 ?>
 <?php ob_start() ?>
 
 <?php $styleSheets = ob_get_clean(); ?>
 <link href="public/css/tree.scss" type="text/css" rel="stylesheet" />
 <?php ob_start() ?>
    <section class="container-fluid startingScreen d-flex justify-content-between align-items-center">
        <div class="container d-flex justify-content-around align-items-center">
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
        </div>
    </section>
 <?php $startScreen = ob_get_clean(); ?>


<?php ob_start(); ?>
    <section class="container-fluid p-0" id="about-us">
        <div class="container mb-3">
            <div class="titleh2">
                <h2>Qui sommes-nous ?</h2>
            </div>
            <div class="about-us-introduction row">
                <div class="col-md-6 px-5">
                    <p>AGIR est une Association Intermédiaire, loi 1901, 
                    dont le projet social est de contribuer à l’insertion
                    et au retour vers l'emploi durable. Elle est une Structure
                    d’Insertion par l’Activité Économique (S.I.A.E) 
                    et une entreprise de l’Économie 
                    Sociale et Solidaire (E.S.S).
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="public/images/home.png" class="homepage-img" alt="image maison">
                </div>
            </div>
        </div>
        <div class="titleh2">
            <h2>Quelques chiffres</h2>
        </div>
        <div class="about-us-numbers container py-5 my-5">
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
        <div class="about-us-engagements py-5 my-5 container">
            <div class="titleh2">
                <h2>Nos engagements envers les demandeurs d'emplois</h2>
            </div>
            <div class="engagements">
                <ul>
                    <div class="row">
                        <div class="col-6">
                            <li>Proposer des missions de Mise à Disposition rémunérées.</li><br>
                            <li>Accompagner et conseiller lors de vos mises à disposition.</li><br>
                            <li>Vous fournir les documents administratifs nécessaires 
                                (contrats de travail, fiches de suivi d’heures, fiches de paie, attestation Pôle Emploi).</li><br>
                            <li>Vous accueillir, vous orienter et accompagner pour un retour à l’emploi durable. </li><br>
                            <li>Vous accompagner dans la définition d’un projet professionnel stable et réalisable.</li><br>
                        </div>
                        <div class="col-6">
                            <li>Etablir un suivi socio- professionnel après un mois de Mise à Disposition.</li><br>
                            <li>Accompagner dans vos démarches de recherche d'emploi</li><br>
                            <li>Vous orienter vers des partenaires référents en fonction de vos 
                                    problématiques sociales.</li><br>
                            <li>Vous orienter vers l’E.I. F : (Espace Information Formation) ainsi que 
        vers les centres de formations.</li>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </section>
<?php $content = ob_get_clean(); ?>


<?php require('template.php');