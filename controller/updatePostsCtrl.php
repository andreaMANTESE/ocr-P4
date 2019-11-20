<?php

require_once('./model/PostManager.php');
$postId = $_GET['postId'];
function updatePost($postId, $postNewText)//creation de l'objet et appel de la fonction de l'objet modifier
{
	$postManager = new \Projet_4_Blog\model\PostManager();
	$updatePost = $postManager->updatePost($postId, $postNewText);

	
	
}

if(!empty($_POST['postNewText'])){

	updatePost($postId, $_POST['postNewText']);

}

require('./view/updatePostView.php');