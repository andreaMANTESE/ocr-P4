<?php
$title = 'Suppression';
$noNavBar = true;
ob_start();
?>




    </head>



		<img src="images/image_body.jpg" alt="image_fond" id="image_fond" />


		<header>

			
            <h1 class="icon_delete"><i class="fas fa-trash-alt"></i> Votre suppression à bien été prise en compte !</h1>
			<br><br/>
            
			<?php
			if($_SESSION['role'] == 'admin')
			{

				echo'<a href="./index.php?redirection=interfaceAdministrateurCtrl" id="link_return_home_delete">Retour au tableau de bord</a>';
			}
			else
			{
				echo'<a href="./index.php?redirection=postsCtrl" id="link_return_home_delete">Retour aux articles</a>';
			}
            
     ?>
    
			

		</header>
	</div>

<?php
$content = ob_get_clean();

require('template.php');
?>

