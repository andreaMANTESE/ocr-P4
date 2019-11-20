<?php
session_start();

if(isset($_GET['userAlias']) && isset($_GET['userRole']) && isset($_GET['userId'])){


$_SESSION['alias'] 	= $_GET['userAlias'];
$_SESSION['role'] 	= $_GET['userRole'];
$_SESSION['id'] 	= $_GET['userId'];


}
           
try
{
    
	
	if (isset($_GET['redirection'])) {
		
		require('./Controller/' . htmlspecialchars($_GET['redirection']) . '.php');	
		
	}

	else
	{

		require('controller/HomeCtrl.php');

	}

}

catch(Exception $e)
{ // S'il y a eu une erreur, alors...

    echo 'Erreur : ' . $e->getMessage();

}