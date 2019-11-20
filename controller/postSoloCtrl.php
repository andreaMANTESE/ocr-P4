<?php

require_once('./model/PostManager.php');
require_once('./model/CommentManager.php');
//!empty($_GET['id']) ? $postId = $_GET['id'] : $postId = $_POST["id"];
$postId = $_GET['id'];
function displayPost($postId)
{
	$postManager = new \Projet_4_Blog\model\PostManager();
	$commentManager =  new \Projet_4_Blog\model\CommentManager();

	$post = $postManager->readOne($postId);
  	$comments = $commentManager->read($postId);
 
   
require('./view/postSoloView.php');

}

displayPost($postId);

function addComment($userId, $commentaire, $postId)
{

	$commentManager = new \Projet_4_Blog\model\CommentManager();

	$affectedLines = $commentManager->createComment($userId, $commentaire, $postId);

	if ($affectedLines == false) 
	{
		
		throw new Exception('Impossible d\'ajouter le commentaire !');
	}
	else
	{
	
		
	}

	
	
}

function signalComment($id, $commentId)
{
	$commentManager = new \Projet_4_Blog\model\CommentManager();
	$commentManager->signalComment($id, $commentId);

	echo "<div class=\"confirm_signaled\">Votre commentaire à bien été signalé</div>";

}


if(!empty($_POST['commentaire'])){

	addComment($_SESSION['id'], $_POST['commentaire'], $postId);


}

if(!empty($_GET['signal']))
{
	signalComment($_GET['commentId'], true);
}


	
?>