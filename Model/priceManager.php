<?php
require_once('dbConnection.php');


class PriceManager extends dbManager{
    
    public function getPrice(){
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM `services` INNER JOIN tarifs ON services.tarif_id = tarifs.id');
        
        return $req;
    }

}