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
                <div class="col-md-6">
                    <p>
                        L'association AGIR, située à Etaples, dans le Pas-de-Calais, a été créé en 1988.
                    </p>
                    <p>C'est une Association Intermédiaire, loi 1901, 
                    dont le projet social est de <strong>contribuer à l’insertion
                    et au retour vers l'emploi durable</strong>. Elle est une Structure
                    d’Insertion par l’Activité Économique (S.I.A.E) 
                    et une entreprise de l’Économie 
                    Sociale et Solidaire (E.S.S).
                    </p>
                    <p>
                        AGIR est ancrée sur les territoires du montreuillois au sein du tissu economique local.
                        Elle est une véritable entreprise qui emploi des personnes en <strong>difficultés sociales et professionnelles</strong> en contrat à durée déterminée, 
                        auprès de particuliers, collectivités locales et entreprises, pour des missions de plus ou moins longue durée.
                    </p>
                    <p>
                        L'association travaille en lien étroit avec un réseau de partenaires: les particuliers, les entreprises, des artisans, des commerçants, 
                        des collectivités territoriales et locale ainsi que des bailleurs sociaux ...
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="public/images/home.png" class="homepage-img" alt="image maison">
                </div>
            </div>
            <div class="about-us-ess py-3 row">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <img src="public/images/ess62.png" width="400px" height="auto" alt="logo ess 62">
                </div>
                <div class="col-md-6">
                    <h2>Agir</h2>
                    <h5 style="color:brown;"><em>Actrice de l'Economie Sociale et Solidaire depuis plus de 30 ans.</em></h5>
                    <p>Face à un monde en perpétuel évolution, nous accompagnons des entreprises, des salariés, des demandeurs d'emplois dans leur projets
                        tout en développant une économie solidaire et sociale qui place <strong>l'homme au coeur de nos missions.</strong>
                    </p>
                </div>
            </div>
        </div>
        <div class="about-us-numbers container py-3">
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