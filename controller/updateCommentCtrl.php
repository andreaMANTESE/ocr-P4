<?php

require_once('./model/CommentManager.php');
$commentId = $_GET['commentId'];
function updateComment($commentId, $commentNewText)//creation de l'objet et appel de la fonction de l'objet modifier
{
	$commentManager = new \Projet_4_Blog\model\CommentManager();
	$update = $commentManager->updateComment($commentId, $commentNewText);

	
	
}

if(!empty($_POST['commentNewText'])){

	updateComment($commentId, $_POST['commentNewText']);

}

require('./view/updateCommentView.php');








































?>