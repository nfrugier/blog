<?php

require("assets/php/bdd.php");

include("assets/php/conf.global.php");

session_start();
if(!(isset($_SESSION['login']) && $_SESSION['login']!='')){
    header("Location:assets/php/login.php");
} else{
    print ".";
}

//echo "<pre>"; print_r($_SESSION); echo "</pre>";
?>

<html>
    <head>
    <link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['root'];?>assets/css/bootstrap.min.css" />
    <meta charset="UTF-8">
    </head>
    <body>
        <h1 class='text-center'>Blog</h1>
        <div class=container>
            <div class="row">
                <div class="col-sm-7 col-md-7 col-lg-6 mx-auto">

                    <?php include("assets/php/article.php") ?>

                </div>
            </div>
        </div>
        <div class='container fixed-bottom'>
            <div class='row'>
                <div class='col-sm-3 col-md-3 col-lg-3 ml-auto'>
                    <div class='card my-auto'>
                        <div class='card-body'>
                            <h5 class="card-title text-center">Bienvenu <?php echo $_SESSION['login'];?></h5><a href="assets/php/add_art.php" class="btn btn-success">+</a>
                            <a href="assets/php/logout.php" class="btn btn-danger  text-uppercase">Déconnexion</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>