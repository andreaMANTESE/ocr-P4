<?php

namespace Projet_4_Blog\model;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=id11657894_ocrp4;charset=utf8', 'id11657894_admin', 'motdepass');

        return $db;
    }
}