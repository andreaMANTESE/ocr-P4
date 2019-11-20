<?php
$title = 'Accueil';

ob_start();
?>

<img src="images/image_body.jpg" alt="image_fond" id="image_fond" />

<div id="message_welcome">
	<?php				
	
		if (!empty($_SESSION['alias'])) { 
			echo '<h1 id="title_welcome">'."Bienvenue". ' '. $_SESSION['alias']. '!'.'</h1>';
			echo"<form action=./index.php?redirection=deconnexionCtrl method=post>
				<input type=submit value=deconnexion id=\"button_disconnection\">
				</form>";
		}		
	?>
</div>

<section id="slider-section">

	<div id="banner_page_home">
		<h1>"Billet simple pour l'Alaska"</h1>
	</div>

</section>

<section id="message_home">

	<p>Bienvenue cher lecteurs et lectrices !</p> 

	<p>Je me présente, Jean Forteroche, écrivain et acteur. Étant déjà l'auteur de 3 romans, je décide pour ce 4e ouvrage d'ouvrir un blog et d'y poster chaque mois, deux articles au sujet de mon futur roman dans le domaine du thriller.<br>
	<br/> Grand voyageur dans l'âme, j'aime parcourir le globe et ainsi à chaque fois, me rendre dans le pays, l'état ou même la région du déroulement de l'histoire. Je suis donc pour ce prochain livre, en Alaska, là où va se dérouler une intrigue avec une histoire des plus angoissante et stressante ! <br>
	<br/>Alors n'hésitez pas à me suivre en vous inscrivant, pour partager avec moi votre ressentit, vos idées, vos pensées sur cette future histoire à travers mes articles, car vos avis compte beaucoup pour moi ! Pour en savoir plus sur moi et sur mes précédents livres, aller dans la rubrique « A propos », vous y trouverez tout ce dont vous avez besoin de savoir.<br>
	<br/>Bonne lecture et surtout Bienvenue en Alaska!</p>


	<p class="signature">Jean Forteroche</p>

</section>

<?php
$content = ob_get_clean();

require('template.php');
?>







