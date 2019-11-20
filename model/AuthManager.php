<?php

namespace Projet_4_Blog\model;
require_once('model/Manager.php');

class AuthManager extends Manager
{
	public function inscription($alias, $mail, $pass)
	{
		$pass_hache = password_hash($pass, PASSWORD_DEFAULT);

		
		$db = $this->dbConnect();
		$req = $db->prepare('INSERT INTO members (alias, pass, mail, date_inscription, role) VALUES(:alias, :pass, :mail, CURDATE(), "user")');
		$req->execute(array(
			'alias'=>$alias,
			'pass'=>$pass_hache,
			'mail'=>$mail

		));

		return $req;

	}

	public function connexion($alias, $pass)
	{

		$db = $this->dbConnect();
	    
		$req = $db->prepare('SELECT id, role, alias, pass FROM members WHERE alias = :alias');
		$req->execute(array(
			'alias'=> $alias,
			
			
		));
		
		$result = $req->fetch();

		$isPasswordCorrect = password_verify($pass, $result['pass']);

		if ($isPasswordCorrect) {
			
			return $result;			
		
		} else {
		
			return 'InvalidPassword';
		
		}
		
		
	}

}
