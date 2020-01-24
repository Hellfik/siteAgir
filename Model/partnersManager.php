<?php
require_once('dbConnection.php');

class PartnerManager extends dbManager{

    public function getPartner(){
        $db = $this->dbConnect();
        $req = $db->query('SELECT logo FROM partenaires');

        return $req;
    }
}