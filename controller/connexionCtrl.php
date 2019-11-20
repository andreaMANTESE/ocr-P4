<?php

require_once('./model/AuthManager.php');
$member=NULL;
function connexion($alias, $pass)
{
    $auth = new \Projet_4_Blog\model\AuthManager(); //Création de l'objet
    $member = $auth->connexion($alias, $pass); //Appel d'une fonction de cet objet
    return $member;
  
}

if(!empty($_POST['alias']) && !empty($_POST['pass']))
{

	$member=connexion(htmlspecialchars($_POST['alias']), htmlspecialchars($_POST['pass']));


}



require('./view/connexionView.php');
