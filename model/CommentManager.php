<?php

namespace Projet_4_Blog\model;
require_once('model/Manager.php');

class CommentManager extends Manager
{
    public function read($postId)
    {
          
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT members.alias, comments.id, members_id, commentaire, DATE_FORMAT(date_comment, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments INNER JOIN members WHERE post_id = ? AND members.id = comments.members_id');
        $comments->execute(array($postId));
        
        return $comments;
    }

    public function createComment($members_id, $commentaire, $postId)
    {
        $db = $this->dbConnect();
        $comment = $db->prepare('INSERT INTO comments(members_id, commentaire, date_comment, post_id) VALUES(?, ?, NOW(), ?)');
        $affectedLines = $comment->execute(array($members_id, $commentaire, $postId));

        return $affectedLines;
    }

    public function updateComment($commentId, $commentNewText)//fonction pour modifier un commentaire
    {
        $db = $this->dbConnect();
        $update = $db->prepare('UPDATE comments SET commentaire = :nvcomment WHERE id = :id');
        $update->execute(array(
            'nvcomment' => $commentNewText,
            'id' => $commentId
        ));

        
    }

    public function signalComment($id, $action)//fonction pour signaler un commentaire
    {
        $db = $this->dbConnect();
        $signale = $db->prepare('UPDATE comments SET signaled = :action WHERE id = :id');
        $signale->execute(array(
            'id' => $id,
            'action' => $action

        ));

       return $signale; 
    }

    

    public function readAllSignaledComments()
    {
          
        $db = $this->dbConnect();
        $comments = $db->query('SELECT id, members_id, commentaire, DATE_FORMAT(date_comment, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE signaled = true');
        
        
        return $comments;
    }

     public function deleteComment($id)
    {
        $db = $this->dbConnect();
        $deleteComment = $db->prepare('DELETE FROM comments WHERE id = ? ');
        $deleteComment->execute(array($id));


    }


     public function deletePostComments($postId)
    {
        $db = $this->dbConnect();
        $deleteComment = $db->prepare('DELETE FROM comments WHERE post_id = ? ');
        $deleteComment->execute(array($postId));


    }


}