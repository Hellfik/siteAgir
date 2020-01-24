<?php

require('./Model/priceManager.php');

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