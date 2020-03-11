<?php 
$title = "Agir - demandeur d'emploi";
?>


<?php ob_start() ?>

<div class="container-fluid offerScreen px-0">
    <div class="jumbotron demandeurs-jumbotron p-0 m-0">
        <h1><em>Vous souhaitez intégrer l'association ?</em></h1>
    </div>
</div>

<?php $startScreen = ob_get_clean() ?>

<?php ob_start() ?>
<section class="site-path">
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex align-items-center">
                <p><em><a href="index.php">Accueil</a> / <strong>Demandeur d'emploi</strong></em></p>
            </div>
        </div>
    </div>
</section>
<section class="container" id="company-conditions">
        <div class="titleh2">
            <h2>Vous envisagez de rejoindre l'association <br>
                mais vous ne savez pas comment vous y prendre ?
            </h2>
        </div>
        <div class="conditions my-5">
            <div class="row d-flex justify-content-center">          
                <div class="col-md-5 d-flex justify-content-center align-items-center conditions-img p-0">
                    <img src="public/images/requirements.svg" style="width:300px; height:auto;" alt="">
                </div> 
                            <div class="col-md-5 ml-4 d-flex align-items-center">
                                <div>
                                    <div class="steps mb-4">
                                        01
                                    </div>
                                    <div class="company-requirements">
                                        <h6>Vous êtes</h6>
                                        <ul>
                                            <li>Jeune de moins de 26 ans en grande difficulté</li>
                                            <li>Bénéficiaire de minima sociaux (revenu de solidarité active (RSA), 
                                                allocation de solidarité spécifique (ASS) …)</li>
                                            <li>Demandeur d'emploi de longue durée</li>
                                            <li>Travailleur reconnus handicapé par la commission des droits et de l’autonomie 
                des personnes handicapées (CDAPH), etc… </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center">
            <img src="public/images/arrow.svg" style="width: 150px; height:auto; transform: rotate(90deg)" alt="">
        </div>
        <div class="row d-flex justify-content-center my-5">          
            <div class="col-md-5 ml-4 d-flex align-items-center">
                <div>
                    <div class="d-flex justify-content-end">
                        <div class="steps mb-4">
                            <span>02</span>
                        </div>
                    </div>
                    <div class="company-requirements text-right">
                        <h6>Inscription</h6>
                        <p>Pour toute inscription, veuillez déposer tous les documents cités ci-dessous au secrétariat d'AGIR.</p>

                        <p>Suite à ce premier contact, un rendez-vous vous sera donné avec un CIP (Conseiller
                           en Insertion Professionnel) du service accompagnant socio-professionnel d'AGIR.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 d-flex justify-content-center align-items-center conditions-img p-0">
                <img src="public/images/requirements.svg" style="width:300px; height:auto;" alt="">
            </div> 
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center">
            <img src="public/images/arrow.svg" style="width: 150px; height:auto; transform:rotate(-90deg) rotateY(180deg)" alt="">
        </div>
        <div class="conditions my-5">
            <div class="row d-flex justify-content-center">          
                <div class="col-md-5 d-flex justify-content-center align-items-center conditions-img p-0">
                    <img src="public/images/certification.svg" style="width:300px; height:auto;" alt="">
                </div> 
                <div class="col-md-5 ml-4 d-flex align-items-center">
                    <div>
                        <div class="steps mb-4">
                            03
                        </div>
                        <div class="company-requirements">
                            <h6>Documents à fournir pour votre inscription</h6>
                            <ul>
                                <li>Pièces d’identité (carte nationale d’identité, carte de séjour, carte de résident…)</li>
                                <li>Permis de conduire</li>
                                <li>Carte Vitale avec attestation de la Sécurité Sociale</li>
                                <li>CV (diplômes, certificats de travail, attestation de formation, permis caristes…)</li>
                                <li>Document d’éligibilité au RSA (avec numéro d’allocataire)</li>
                                <li>Carte de demandeur d’emploi (avec numéro d’identifiant Pôle Emploi)</li>
                                <li>Fiche de prescription de la Mission Locale ( si vous avez moins de 26 ans)</li>
                                <li>Reconnaissance RQTH</li>
                                <li>Justificatif de la visite de la Médecine du Travail (si document datant de moins de 2 ans).</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-us-engagements py-5  container">
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
        <div class="row my-5">
            <div class="col-md-8 text-center">
                <h4>Visionner notre livret d'accueil</h4>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <a class="btn-download" href=""><i class="fas fa-download mr-1"></i> Livret d'accueil</a>
            </div>
        </div>
</section>
<?php $content = ob_get_clean();
require('template.php');
?>
