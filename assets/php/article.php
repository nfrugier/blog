<?php
require("bdd.php");
include("assets/php/conf.global.php");

$id_cat = (isset($_GET['id_cat'])) ? 'WHERE category.id_cat='.$_GET['id_cat'] : "" ;
$author = (isset($_GET['id_user'])) ? 'WHERE users.id_user='.$_GET['id_user'] : "" ;

$sql = 'SELECT login, subject, message, date_publication, name, articles.id_cat, users.id_user FROM articles 
JOIN users ON articles.id_author=users.id_user 
JOIN category ON articles.id_cat=category.id_cat '
.$id_cat.' '.$author.
' ORDER BY id_article DESC';

$articles = $dbh->query($sql);
foreach ($articles as $article): ?>

<div class="container">
    <div class="card text-center shadow-sm">
        <div class="card-header">
            Auteur : <?php echo "<a href='/index.php?id_user=".$article['id_user']."'>".$article['login']."</a>"; ?>
        </div>
        <div class="card-body">
            <div class="card-title">
                <?php echo "<h3>".$article['subject']."</h3>"; ?>
                
            </div>
            <p class="card-text">
                <?php echo nl2br($article['message']); ?>
            </p>
        </div>
        <div class="card-footer text-muted">
            <?php echo $article['date_publication']; ?>
            <?php echo "<br><span class='small'> Catégorie : <a href='/index.php?id_cat=".$article['id_cat']."'>".utf8_encode($article['name'])."</a>"."</span>" ?>
        </div>
    </div>
</div>
<br>

<?php endforeach ?>