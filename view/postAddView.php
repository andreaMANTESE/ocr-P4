<?php
$title 		= 'Traitement de texte';
$noNavBar 	= true;
$useTiny_mce = true;
ob_start();
?>

<div style='margin-top: 100px;'>
<img src="images/tache-encre.jpg" alt="image_fond2" id="picture_ink_stain" />

<header>
	<a href="./index.php?redirection=interfaceAdministrateurCtrl" id="link_home">Accueil</a>
</header>
	
<h1 id="title_postAdd">Traitement de texte</h1>
<form action="./index.php?redirection=interfaceAdministrateurCtrl" name="form_postAdd" id="form_postAdd"  method="post">
	<input type="text" name="title" placeholder="Titre de l'article:"/><br/>
	<textarea id="textarea_postAdd" name="texte" rows="40" ></textarea>

	<input type="submit" value="Ajout de l'article" id="button_addPost"/>

</form>
<br /><br />
</div>

<?php
$content = ob_get_clean();

require('template.php');
?>