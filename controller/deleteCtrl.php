<?php

require_once('./model/PostManager.php');
require_once('./model/CommentManager.php');

function deletePost($postId)//creation de l'objet et appel de la fonction de l'objet modifier
{
	$postManager = new \Projet_4_Blog\model\PostManager();
	$commentManager = new \Projet_4_Blog\model\CommentManager();
	$deletePost = $postManager->deletePost($postId);
	$deleteComments = $commentManager->deletePostComments($postId);	
}

function deleteComment($commentId)//creation de l'objet et appel de la fonction de l'objet modifier
{
	
	$commentManager = new \Projet_4_Blog\model\CommentManager();
	
	$deleteComment = $commentManager->deleteComment($commentId);	
}


if(!empty($_GET['commentId']))
{
	deleteComment(htmlspecialchars($_GET['commentId']));
}
elseif(!empty($_GET['postId']))
{
	deletePost(htmlspecialchars($_GET['postId']));
}




require('./view/deleteView.php');