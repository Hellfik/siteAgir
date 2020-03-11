<?php

require('./Model/priceManager.php');
require('./Model/partnersManager.php');
require('./Model/offersManager.php');

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


function demandeur(){
    require('./View/frontend/demandeur.php');
}

function particuliers(){
    require('./View/frontend/particuliers.php');
}

function offres(){
    $offersManager = new OffersManager();
    $offers = $offersManager->getOffers();
    require('./View/frontend/offres.php');
}

function login(){
    require('./View/backend/login.php');
}

function dashboard(){
    require('./View/backend/dashboard.php');
}