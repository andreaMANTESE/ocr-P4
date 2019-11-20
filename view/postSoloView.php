<?php
$title      = 'Articles';
$noNavBar   = true;
ob_start();
?>


<img src="images/image_body.jpg" alt="image_fond" id="image_fond" />





<a href="./index.php?redirection=postsCtrl" id="link_return_home">Retour aux articles</a>

<h1 id="title_post_solo"> ~ Article ~ </h1>

<?php

echo '<h3 id="title_date_post">'.htmlspecialchars($post['titre']) . ' ' .htmlspecialchars($post['creation_date_fr']).'</h3>'. '<br />'. '<p id="text_post">'. htmlspecialchars_decode(nl2br(html_entity_decode($post['texte']))). '</p>';
?>



<h2 id="title_post_solo"> ~ Commentaires ~ </h2>


<?php

while ($comment = $comments->fetch())
    {
        

    echo '<h3 id="title_date_comment">'.htmlspecialchars($comment['alias']). ' '. 'le'.  ' '. $comment['comment_date_fr']. '</h3>'. '<br /> ' .'<p id="text_post">'.  htmlspecialchars($comment['commentaire']). ' '.'<br/>'.'<p><a href="index.php?redirection=postSoloCtrl&amp;commentId=' . htmlspecialchars($comment['id']) . '&amp;signal=true&amp;id=' . htmlspecialchars($_GET['id']) . '"><i class="fas fa-exclamation-triangle"></i>Signaler le commentaire</a>'. '</p>';

    if(!empty($_SESSION['id'])){
        
        
        if($_SESSION['id']==$comment['members_id'])
        {
            echo '<p><a href="index.php?redirection=updateCommentCtrl&amp;commentId=' . htmlspecialchars($comment['id']) . '&amp;text=' .  htmlspecialchars($comment['commentaire']) .'">modifier</a></p>';
            echo '<p><a href="index.php?redirection=deleteCtrl&amp;commentId=' . htmlspecialchars($comment['id']) .'">supprimer</a></p>';
        }
     
    }
    
    
	}

$comments->closeCursor();
 

?>

<?php if(!empty($_SESSION['id']))

{ ?>

<section id="form_add_comments">
<h2 id="title_form_add_comments">Merci de remplir le formulaire ci-dessous pour laisser un commentaire</h2>

        <?php echo "<form action=\"index.php?redirection=postSoloCtrl&amp;id=" . $postId . "\" method=\"post\">"; ?>
            <div>
                <label for="comment" class="comment">Commentaire</label><br />
                <textarea id="comment" name="commentaire" rows="15" cols="15"></textarea>
            </div>
            <div>
                <input type="submit" value="valider" class="button_form_add_comment" />
            </div>
        </form>

</section>

<?php } ?>



<?php
$content = ob_get_clean();

require('template.php');
?>
