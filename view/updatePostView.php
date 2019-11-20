<?php
$title = 'Modification article';
$noNavBar = true;
$useTiny_mce = true;
ob_start();
?>


<img src="images/image_body.jpg" alt="image_fond" id="image_fond" />

<h1 id="title_updatePost">Vous êtes bien sur la page de modifications!</h1>

<?php
if(empty($_POST['postNewText'])){



?>
    <form action="./index.php?redirection=updatePostsCtrl&amp;postId=<?=$postId?>" name="form_update_post" id="form_update_post" method="post">
            
        <label for="texte" id="label_title_updatePost"></label>
        <textarea id="textarea_updatePost" name="postNewText" rows="26" cols="57"></textarea>

        <input type="submit" value="modification de l'article" id="button_updatePost"/>
            
    </form>

<?php
}
else{

    echo "<a href=\"index.php\" id=\"message_congratulationUpdatePost\">Félicicitation Jean, votre article à été modifié avec succès, retour à l'accueil</a>";
}
?>        

<?php
$content = ob_get_clean();

require('template.php');
?>
