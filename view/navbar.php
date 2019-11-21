<header>
	<button id="burger_icon_btn"></button>
	<i class="fas fa-bars burger_icon"></i>
	
	<nav>
		<ul>
			<li><a href="./index.php?">Accueil</a></li>
			<li><a href="./index.php?redirection=postsCtrl">Articles</a></li>
			<li><a href="./index.php?redirection=aboutCtrl">A propos</a></li>
			<?php
				
			if(empty($_SESSION['alias']))
			{								

				echo"<li><a href=\"./index.php?redirection=connexionCtrl\">Se connecter</a></li>".
				"<li><a href='./index.php?redirection=inscriptionCtrl'>S'inscrire</a></li>";

			}
			elseif(!empty($_SESSION['role']) && $_SESSION['role']=='admin')
			{
				echo"<li><a href=\"./index.php?redirection=interfaceAdministrateurCtrl\">Admin</a></li>";
			}

			?>

		</ul>
	</nav>				
</header>