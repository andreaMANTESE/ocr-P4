<?php

require_once('./model/CommentManager.php');



function unsignalComment($commentid)
{
	$commentManager = new \Projet_4_Blog\model\CommentManager();
	$commentManager->signalComment($commentid, false);
}

function getAllSignaledComments()
{
	$commentManager = new \Projet_4_Blog\model\CommentManager();
	return $commentManager->readAllSignaledComments();
}



if(!empty($_GET['id_cancel']))
{
	$commentid = htmlspecialchars($_GET['id_cancel']);
	unsignalComment($commentid);
}

$signaledComments = getAllSignaledComments();



require('./view/commentsSignalView.php');


