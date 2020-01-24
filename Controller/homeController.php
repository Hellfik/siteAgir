<?php

require('./Model/priceManager.php');
require('./Model/partnersManager.php');

function home(){
    require('./View/frontend/accueil.php');
}

function contact(){
    require('./View/frontend/contact.php');
}

function tarifs(){
    $priceManager = new PriceManager();
    $prices = $priceManager->getPrice();
    require('./View/frontend/tarifs.php');
}

function partenaires(){
    $partnerManager = new PartnerManager();
    $partners = $partnerManager->getPartner();
    require('./View/frontend/partenaires.php');
}