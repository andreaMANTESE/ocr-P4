<?php
$title = 'Deconnexion';
$noNavBar = true;
ob_start();
?>

<p id="paragraph_deconnexion">Vous êtes déconnecté!</p>

<a href="./index.php" id="link_return_connexion">Connectez-vous!</a>

<?php
$content = ob_get_clean();

require('template.php');
?>
