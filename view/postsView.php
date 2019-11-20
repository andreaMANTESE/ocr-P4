<?php
$title = 'Articles';

ob_start();
?>


<img src="images/image_body.jpg" alt="image_fond" id="image_fond" />

<section id="section">
    <?php

    if ($posts->rowCount() < 1) 
    {
        echo '<h2>Aucun post à afficher</h2>';
    }

    ?>

    <h1 id="title_post">Articles du blog:</h1>



      

    <?php

    while ($donnees = $posts->fetch())
    {
        echo '<h2 id="title_date_post">' . htmlspecialchars($donnees['titre']) . ' '  . 'le' . ' '. htmlspecialchars($donnees['creation_date_fr']) . '</h2> ' . '<p id="text_post">' . htmlspecialchars_decode(nl2br(html_entity_decode($donnees['texte']))).'</p>';
    ?>
            
        <a href="index.php?redirection=postSoloCtrl&amp;id=<?= $donnees['id'] ?>"><i class="far fa-comment"></i> Voir les commentaires</a></p>
            
    <?php
        if(!empty($_SESSION['role']))
        {
            if($_SESSION['role']=='admin')
            {
                echo '<a href="index.php?redirection=deleteCtrl&amp;postId=' . htmlspecialchars($donnees['id']) .'">Suppression article</a>'.' '.'ou'. ' '. '<a href="index.php?redirection=updatePostsCtrl&amp;postId=' . htmlspecialchars($donnees['id']) . '&amp;postNewTexte=' .  htmlspecialchars($donnees['texte']) .'">modifier</a>'. '</p>';

            }
            
        }      
    }

    $posts->closeCursor();
    ?>

</section>

<?php
$content = ob_get_clean();

require('template.php');
?>




