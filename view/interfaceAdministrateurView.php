<?php
$title 		= 'Tableau de bord';
$noNavBar 	= true;
ob_start();
?>

<img src="images/fond-tableau-de-bord.jpg" alt="fond-interface-Admin" id="background-interface-Admin" />
	
<header id="header_tableau_bord">
	<form action=./index.php?redirection=deconnexionCtrl method=post>
		<input type=submit value=deconnexion id="button_disconnection">
	</form>
	
	<span class="icon_bord_1"><i class="fab fa-safari"></i> Bienvenue sur votre page d'administrateur Jean !</span>
</header>

<section id="dashboard">

		<span class="icon_bord_2"><i class="fas fa-cogs"></i> Boîte à outils:</span>
		<a href="index.php?redirection=postAddCtrl" id="link_dashboard"><i class="fas fa-paint-brush"></i> Rediger un article</a>
		<a href="index.php?redirection=postsCtrl" id="link_dashboard"><i class="fas fa-edit"></i>Modifier / Supprimer un article</a>
		<a href="index.php?redirection=aboutCtrl" id="link_dashboard"><i class="far fa-id-card"></i> A propos /</a>
		<a href="index.php?redirection=commentsSignalCtrl" id="link_dashboard"><i class="far fa-id-card"></i> Commentaires signalés</a>

</section>



		



<?php
$content = ob_get_clean();

require('template.php');
?>