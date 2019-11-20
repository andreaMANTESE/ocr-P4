<?php

require_once('./model/PostManager.php');

function afficherPosts()
{
    $postManager = new \Projet_4_Blog\model\PostManager(); //Création de l'objet
    $posts = $postManager->readAll(); //Appel d'une fonction de cet objet

    require('./view/postsView.php');  
}

afficherPosts();

 




 