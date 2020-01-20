<?php

class Manager
{
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=agir;charset=utf-8', 'root', '');
        return $db;
    }
}