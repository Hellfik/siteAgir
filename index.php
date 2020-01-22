<?php

require_once('./Controller/homeController.php');


try{
    if(isset($_GET['action'])){
        if($_GET['action'] == "contact"){
            contact();
        }
    }else{
        home();
    }

}catch(Exception $e){
    echo "Erreur :" . $e->getMessage();
}