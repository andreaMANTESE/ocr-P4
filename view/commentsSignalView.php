<?php
$title 		= 'Commentaires signalés';
$noNavBar 	= true;
ob_start();
?>


<img src="images/fond-tableau-de-bord.jpg" alt="fond-interface-Admin" id="background-interface-Admin" />
<header id="header_tableau_bord">
	<form action=./index.php?redirection=deconnexionCtrl method=post>
		<input type=submit value=deconnexion id="button_disconnection">
	</form>
	<h2 id="title_comment_signals"><i class="fas fa-keyboard"></i>Commentaires signalés récement par les visiteurs</h2>
	<a href="./index.php?redirection=interfaceAdministrateurCtrl" id="link_home_comment_signals">Retour</a>
</header>

<section id="comment_signals">
	

	<?php

		while($donnees = $signaledComments->fetch())
		{
			echo '<p id="comment_signal">'.htmlspecialchars($donnees['commentaire']). '<br/>'.  '<a href="index.php?redirection=deleteCtrl&amp;commentId=' . htmlspecialchars($donnees['id']) .'" id="delete_comment"><i class="fas fa-times"></i>Supprimer ce commentaire</a>'.' '.'<a href="index.php?redirection=commentsSignalCtrl&amp;id_cancel=' . htmlspecialchars($donnees['id']) .'" id="cancel_comment"><i class="fas fa-times"></i>Annuler ce signalement</a>'.'</p>';
		
		}

		$signaledComments->closeCursor();

		?>
		
		

		



<?php
$content = ob_get_clean();

require('template.php');
?>