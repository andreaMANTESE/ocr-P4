<?php
$title 		= 'Inscription';
$noNavBar 	= true;
ob_start();
?>

<?php 

if($member==NULL || $member=='InvalidPassword'){

?>

<a href="./index.php" id="link_return_home">Retour à l'accueil</a>

<h1 id="title_inscription">Inscription à l'espace membres du blog</h1>

<form action="./index.php?redirection=InscriptionCtrl"  method="post">
	<div>
		<label for="pseudo" class="label">Pseudo</label><br/>
		<input type="text" name="alias"/>
	</div><br />

	<div>
		<label for="mail" class="label">Mail</label><br/>
		<input type="mail" name="mail" />
	</div><br />

	<div>
		<label for="pass" class="label">Mot de passe</label><br/>
		<input type="pass" name="pass"/>
	</div><br />

	<div>
	<input type="submit" value="Valider" class="button_validate"/>
	</div>

</form>


<?php 

} else if ($member != 'InvalidPassword') {

?>

	<h1 id="text_inscription">Félicitation, vous êtes bien connecté, en tant que <?= $member['alias']?> !</h1>
	<p>
		<a href='index.php?redirection=HomeCtrl&amp;userAlias=<?=$member['alias']?>&amp;userRole=<?=$member['role']?>&amp;userId=<?=$member['id']?>'id="link_return_home_connexion">
			Retour à l'accueil
		</a>
	</p>

<?php

} 

if ($member == 'InvalidPassword') {

	echo '<p style=\'color:red\'>Mot de passe ou identifiant incorrect !</p>';
}

?>

<?php
$content = ob_get_clean();

require('template.php');
?>