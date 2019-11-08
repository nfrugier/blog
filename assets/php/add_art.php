<?php 
require("bdd.php");
include("conf.global.php");
session_start();

if(!(isset($_SESSION['login']) && $_SESSION['login']!='')){
    header("Location:login.php");
}

if(isset($_POST['post'])){


    $sql = "INSERT INTO articles SET id_author=:id_author, subject=:subject, message=:message, date_publication=:date, id_cat=:cat";
    

    try {
        $stmt = $dbh->prepare($sql);

        $stmt->bindValue(':id_author', $_SESSION['id']);
        $stmt->bindValue(':subject', $_POST['subject']);
        $stmt->bindValue(':message', $_POST['message']);
        $stmt->bindValue(':date', gmdate('Y-m-d h:i:s'));
        $stmt->bindValue(":cat", $_POST['cat']);

        $stmt->execute();

        // $stmt->debugDumpParams();
        header("Location:../../index.php");
    }
    catch(PDOException $e) {
        print "Erreur ! : " .$e->getMessage(). "<br>";
        die();
    }
}

?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['root'];?>assets/css/bootstrap.min.css" />
        <script src="../js/autoarea.js"></script>
    </head>
    <body  class="bg-secondary">
    <?php include("../../navbar.php") ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
                    <div class="card card-signin my-5">
                        <div class="card-body">
                            <h5 class="card-title text-center">Ajout d'un article</h5>
                            <form class="form-signin" method="post">
                                <div class="form-label-group">
                                <input type="text" id="author" name="author" class="form-control" hidden>
                                </div>

                                <div class="form-label-group">
                                <input type="text" id="subject" name="subject" class="form-control" placeholder="Sujet" required>
                                </div>

                                <div class="form-label-group">
                                    
                                <select name="cat" class="form-control" id="cat">
                                    <?php
                                        $query = "SELECT * FROM category ORDER BY name ASC";
                                        $categories = $dbh->query($query);
                                        foreach($categories as $category): ?>
                                        <option value="<?php echo $category['id_cat']?>"><?php echo utf8_encode($category['name']) ?></option>
                                        <?php endforeach ?>
                                </select>
                                <label for="cat" class="small">Catégories</label>
                                </div>

                                <div class="form-label-group">
                                <textarea class="form-control" name="message" id="message" placeholder="Message"></textarea>
                                </div>
                                <button class="btn btn-lg btn-success text-uppercase" type="submit" name="post">Poster</button>
                                <button class="btn btn-lg btn-danger text-uppercase" type="reset" name="reset">Annuler</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>