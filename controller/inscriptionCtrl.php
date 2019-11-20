<?php

function inscription($auth, $alias, $mail, $pass)
{
    $auth->inscription($alias, $mail, $pass); //Appel d'une fonction de cet objet   
}


function connexion($auth, $alias, $pass)
{
    $member_ = $auth->connexion($alias, $pass); //Appel d'une fonction de cet objet 
    return $member_;  
}




if(!empty($_POST['pass']) && !empty($_POST['mail']) && !empty($_POST['alias']))
{
	require_once('./model/AuthManager.php');

	$auth = new \Projet_4_Blog\model\AuthManager(); //Création de l'objet 
	$pass = htmlspecialchars($_POST['pass']);
	$alias = htmlspecialchars($_POST['alias']);
	$mail = htmlspecialchars($_POST['mail']);

	inscription($auth, $alias, $mail, $pass);
	
	
	$member = connexion($auth, $alias, $pass);

}
else
{
	$member = NULL;
}

require('./view/inscriptionView.php');
