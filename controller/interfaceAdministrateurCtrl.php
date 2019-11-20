<?php
require_once('./model/PostManager.php');
require_once('./model/CommentManager.php');

function createPost($texte, $title)
{
	$postManager = new \Projet_4_Blog\model\PostManager();

	$affectedPost = $postManager->createPost($texte, $title);

	if ($affectedPost === false) 
	{
		throw new Exception('Impossible d\'ajouter le commentaire !');
	}
	else
	{
		header('Location:./index.php?redirection=PostsCtrl');
	}

	require('./view/PostsView.php');
}

function getAllSignaledComments()
{
	$commentManager = new \Projet_4_Blog\model\CommentManager();

	return $commentManager->readAllSignaledComments();
}

$signaledComments = getAllSignaledComments();



if(!empty($_POST['texte']) && !empty($_POST['title']))
{

	createPost($_POST['texte'], $_POST['title']);

	

}
elseif(empty($_POST['texte']) && !empty($_POST['title']))
{
	
	throw new Exception('Impossible d\'ajouter l\'article ');
}
elseif(empty($_POST['title']) && !empty($_POST['texte']))
{
	createPost($_POST['texte'], "Aucun titre");
}





	
require('./view/interfaceAdministrateurView.php');
	
?>
