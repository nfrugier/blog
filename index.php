<?php

require("assets/php/bdd.php");

include("assets/php/conf.global.php");

session_start();
if(!(isset($_SESSION['login']) && $_SESSION['login']!='')){
    header("Location:assets/php/login.php");
} else{
}

//echo "<pre>"; print_r($_SESSION); echo "</pre>";
?>

<html>
    <head>
    <link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['root'];?>assets/css/bootstrap.min.css" />
    <meta charset="UTF-8">
    </head>
    <body class="bg-secondary">
        <?php include("navbar.php") ?>
        <div class=container>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">

                    <?php include("assets/php/article.php") ?>

                </div>
            </div>
        </div>
    </body>
</html>