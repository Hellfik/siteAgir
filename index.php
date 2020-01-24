<?php

require_once('./Controller/homeController.php');


try{
    if(isset($_GET['action'])){
        if($_GET['action'] == "contact"){
            contact();
        }elseif($_GET['action'] = "tarifs"){
            tarifs();
        }
    }else{
        home();
    }

}catch(Exception $e){
    echo "Erreur :" . $e->getMessage();
}