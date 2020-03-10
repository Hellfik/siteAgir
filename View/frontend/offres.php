<?php 
$title = "Agir - offres";
?>


<?php ob_start() ?>
    <div class="container-fluid offerScreen px-0">
        <div class="jumbotron offer-jumbotron p-0 m-0">
            <h1><em>Nos propositions d'offres</em></h1>
        </div>
    </div>

<?php $startScreen = ob_get_clean();?> 
    
<?php ob_start() ?>
<section class="site-path">
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex align-items-center">
                <p><em><a href="index.php">Accueil</a> / <strong>Offres</strong></em></p>
            </div>
        </div>
    </div>
</section>
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-8">
                <div class="offer">
                    <h2 class="mb-1">Maçon (H/F)</h2>
                    <p><sub>Par Admin, le 03 mars 2020 à 12h00 </sub> <span class="badge badge-warning">Offre</span></p>
                    
                    <p>Rattaché(e) au responsable du restaurant, vous aurez en charge de la lecture des plans, de la préparation du chantier (outillage,
                        matériaux, sécurisations des abords), de la pose du coffrage et coulage de béton ...</p>
                    <p>Cet emploi nécessite de la rigueur et du professionnalisme.</p>
                    <a href="#" class="offer-btn" data-toggle="modal" data-target="#exampleModalCenter">En savoir plus</a>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Maçon (H/F)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>L’Association Intermédiaire AGIR recrute pour l'un de ses clients, Un MAÇON (H/F)</p>
                        <p>Rattaché(e) au responsable du restaurant, vous aurez en charge les missions suivantes :</p>
                        <ul style="list-style-type:disc; padding-left:30px !important;">
                            <li>Lecture des plans</li>
                            <li>Préparation du chantier : outillage, matériaux, sécurisation des abords</li>
                            <li>Création ou assemblage du coffrage</li>
                            <li>Pose du coffrage et coulage du béton</li>
                            <li>Repli du chantier...</li>
                        </ul>
                        <p>Cet emploi nécessite de la rigueur et du professionnalisme.</p>
                        <p><strong>Votre profil:</strong></p>
                        <ul style="list-style-type:disc; padding-left:30px !important;">
                            <li>Capacité d’adaptation</li>
                            <li>Gestion du stress</li>
                            <li>Rigueur Autonomie</li>
                            <li>Travail en équipe</li>
                            <li>Permis B Obligatoire Véhicule souhaité</li>
                        </ul>
                        <p><strong>Rémunération:</strong></p>
                        <p>SMIC+10%Congés Payés</p>
                        <p>
                            Vous correspondez à ce profil ? <br>
                            Postulez dès maintenant à <br>
                            L’Association Intermédiaire AGIR <br>
                            31 rue de la Pierre Trouée 62630 Etaples <br>
                            03.21.94.69.47 <br>
                            association.agir.etaples@wanadoo.fr <br>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn offer-btn" data-dismiss="modal">Fermer</button>
                        <a href="index.php?action=contact#company-form" class="btn offer-btn" >Nous contacter</a>
                    </div>
                    </div>
                </div>
                </div>
                <div class="offer">
                    <h2 class="mb-1">Peintre (H/F)</h2>
                    <p><sub>Par Admin, le 03 mars 2020 à 13h00 </sub><span class="badge badge-warning">Offre</span></p>
                    
                    <p>Rattaché(e) au responsable de chantier, vous aurez en charge des peintures intérieures et extérieures sur rénovation ou neuf,
                    technique de peinture, de la protections des sols ...
                    </p>
                    <a href="#" class="offer-btn">En savoir plus</a>
                </div>
                <div class="offer">
                    <h2 class="mb-1">Jardinier (H/F)</h2>
                    <p><sub>Par Admin, le 03 mars 2020 à 15h00 </sub><span class="badge badge-warning">Offre</span></p>
                    
                    <p>Rattaché(e) au responsable du chantier, vous aurez en charge de l'entretien et nettoyage des parterres, des plantations, du désherbage, des taillages de haies ...
                    </p>
                    <a href="#" class="offer-btn">En savoir plus</a>
                </div>
            </div>
            <aside class="col-md-4">
                <h2>Offres récentes</h2>
            </aside>
        </div>
    </div>
<?php $content = ob_get_clean();
require('template.php');
?>