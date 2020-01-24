<?php
$title = "Agir - Tarifs";
?>

<?php ob_start()?>
    <div class="container-fluid startingScreen d-flex justify-content-between align-items-center">
            <div class="container d-flex justify-content-around align-items-center">
                <div class="heading">
                    <h1 class="mb-4">Tarifs</h1>
                    <p class="mb-4">
                        Vous trouverez ici nos tarifs <br>
                        applicables à partir du <br>
                        1<sup>er</sup> janvier <span id="year-price"></span>
                    </p>
                </div>
                <div class="heading-image">
                    <img src="public/images/wallet.png" alt="tarifs image">
                </div>
            </div>
    </div>
<?php $startScreen = ob_get_clean() ?>

<?php ob_start()?>
<section class="container my-5" id="company-tarifs">
    <div>
        <h2>Nos tarifs</h2>
        <?php 
            while($data = $prices->fetch()){
        ?>       
        <div class="tarifs-services row my-4">
            <div class="tarif-description d-flex align-items-center col-md-6">
                <div>
                    <h5><?= $data['intitule'] ?></h5>
                    <p><?= $data['description'] ?></p>
                </div>
            </div>
            <div class="tarif d-flex align-items-center col-md-6">
                <p class="p-5"><?= $data['prix'] ?> €/heure 
                <?php
                    if($data['cesu'] === '1'){
                        ?>*
                <?php
                    }
                    ?>
                <?php 
                    if($data['is_deductible'] === '1'){
                ?> (soit <?= $data['prix'] / 2 ?> €
                    après avantage fiscale) 
                <?php
                } 
                ?></p>
            </div>
        </div>

        <?php
            }
        ?>
        <p>*si paiement CESU, 0.20cts supplémentaires par heure      </p>
    </div>
</section>


<?php $content = ob_get_clean() ;
require('template.php');
?>

