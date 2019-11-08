<?php
require("bdd.php");
include("assets/php/conf.global.php");

$id_cat = (isset($_GET['id_cat'])) ? 'WHERE category.id_cat='.$_GET['id_cat'] : "" ;

$sql = 'SELECT login, subject, message, date_publication, name, category.id_cat FROM articles 
JOIN users ON articles.id_author=users.id_user 
JOIN category ON articles.id_cat=category.id_cat '.$id_cat.' ORDER BY id_article DESC';

$articles = $dbh->query($sql);
foreach ($articles as $article): ?>

<div class="container">
    <div class="card text-center">
        <div class="card-header">
            Auteur : <?php echo $article['login']; ?>
        </div>
        <div class="card-body">
            <div class="card-title">
                <?php echo "<h3>".$article['subject']."</h3>"; ?>
                <?php echo "<h5> Catégorie : <a href='/index.php?id_cat=".$article['category.id_cat']."'>".utf8_encode($article['name'])."</a></h5>" ?>
            </div>
            <p class="card-text">
                <?php echo $article['message']; ?>
            </p>
        </div>
        <div class="card-footer text-muted">
            <?php echo $article['date_publication']; ?>
        </div>
    </div>
</div>
<br>

<?php endforeach ?>