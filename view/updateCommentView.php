<?php
$title = 'Modification commentaire';
$noNavBar = true;
ob_start();
?>


<h1 id="title_update_comment">Vous êtes bien sur la page de modifications!</h1>

<?php
if(empty($_POST['commentNewText'])){



?>
    <section id="form_update_comment">
        <form action="./index.php?redirection=updateCommentCtrl&amp;commentId=<?=$commentId?>" method="post">
            
                
            <div>
                <label for="comment" id="label_update_comment">Nouveau commentaire:</label><br />
                <textarea id="comment" name="commentNewText" rows="25"></textarea>
            </div>

            <div>
                <input type="submit" value="valider" id="button_form_update_comment" />
            </div>
        </form>
    </section>
<?php
}
else{

    echo "<a href=\"index.php\">Félicicitation, commentaire modifié, retour à l'accueil</a>";
}
?>        

<?php
$content = ob_get_clean();

require('template.php');
?>
