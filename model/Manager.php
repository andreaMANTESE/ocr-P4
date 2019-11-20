<?php

namespace Projet_4_Blog\model;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=alaska_blog;charset=utf8', 'root', '');

        return $db;
    }
}