<?php

require_once('dbConnection.php');

class OffersManager extends dbManager{
    //Fonction de récupération des trois dernières offres ordonnées de façon décroissante 
    public function getOffers(){
        $db = $this->dbConnect();
        $sql = 'SELECT id, intitule, description, resume, profil, remuneration, DATE_FORMAT(created_at, "%d/%m/%Y à %Hh%i") as date 
                FROM offres ORDER BY created_at desc LIMIT 3';
        $req = $db->query($sql);

        return $req;
    }
}