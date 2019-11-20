<?php

namespace Projet_4_Blog\model; //namespace où se trouvera la classe

require('./model/Manager.php');

class PostManager extends Manager
{
	public function readAll()
	{
		$db = $this->dbConnect();
	    
		$reqResult = $db->query('SELECT id, titre, texte, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY id DESC');
	    
	    return $reqResult;
	}

	public function readOne($postId)
	{
	    
	    $db = $this->dbConnect();
	    $req = $db->prepare('SELECT id, titre, texte, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
	    $req->execute(array($postId));
	    $post = $req->fetch();

	    return $post;
	}

	public function createPost($texte, $title)
    {
        $db = $this->dbConnect();
        $createPost = $db->prepare('INSERT INTO posts(titre, texte, creation_date) VALUES(?, ?, NOW())');
        $affectedPost = $createPost->execute(array($title, $texte));

        return $affectedPost;
    }

    public function updatePost($postId, $postNewText)//fonction pour modifier un commentaire
    {
        $db = $this->dbConnect();
        $updatePost = $db->prepare('UPDATE posts SET texte = :nvtexte WHERE id = :id');
        $updatePost->execute(array(
            'nvtexte' => $postNewText,
            'id' => $postId
        ));

        
    }

    public function deletePost($id)
    {
    	$db = $this->dbConnect();
    	$deletePost = $db->prepare('DELETE FROM posts WHERE id = ? ');
    	$deletePost->execute(array($id));


    }

	
}



