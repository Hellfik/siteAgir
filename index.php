<?php

require_once('./Controller/frontController.php');


// $request = $_GET['action'];

// if($request == "home"){
//     home();
// }
// exit;
try{
    if(isset($_GET['action'])){
        if($_GET['action'] == "contact"){
            contact();
        }elseif($_GET['action'] == "tarifs"){
            tarifs();
        }elseif($_GET['action'] == 'nos-partenaires'){
            partenaires();
        }elseif($_GET['action'] == 'demandeur-emploi'){
            demandeur();
        }elseif($_GET['action'] == 'offres'){
            offres();
        }elseif($_GET['action'] == 'particulier'){
            particuliers();
        }elseif($_GET['action'] == 'admin'){
            dashboard();
        }
    }else{
        home();
    }

}catch(Exception $e){
    echo "Erreur :" . $e->getMessage();
}