<?php

class dbManager
{
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=agir;charset=utf8', 'root', '');
        return $db;
    }
}