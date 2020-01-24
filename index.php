<?php

require_once('./Controller/homeController.php');


try{
    if(isset($_GET['action'])){
        if($_GET['action'] == "contact"){
            contact();
        }elseif($_GET['action'] == "tarifs"){
            tarifs();
        }elseif($_GET['action'] == 'nos-partenaires'){
            partenaires();
        }
    }else{
        home();
    }

}catch(Exception $e){
    echo "Erreur :" . $e->getMessage();
}