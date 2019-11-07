<?php
require("bdd.php");
include("assets/php/conf.global.php");

$sql = 'select * from articles order by id_article desc';

$articles = $dbh->query($sql);
foreach ($articles as $article): ?>

<div class="container">
    <div class="card text-center">
        <div class="card-header">
            <?php echo $article['subject']?>
        </div>
        <div class="card-body">
            <div class="card-title">
                Auteur : <?php echo $article['author'];?>
            </div>
            <p class="card-text">
                <?php echo $article['message']; ?>
            </p>
        </div>
        <div class="card-footer text-muted">
            <?php echo $article['date_publication'];?>
        </div>
    </div>
</div>
<br>

<?php endforeach ?>