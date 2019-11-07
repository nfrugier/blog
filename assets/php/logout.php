<?php 

include("conf.global.php");


session_start();
session_destroy();

?>

<html>
    <head>
        <title>Logged out</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['root'];?>assets/css/bootstrap.min.css" />
    </head>
    <body>
        <h1 class='text-center'>Blog</h1>
        <div class='container'>
            <div class='row'>
                <div class='col-sm-9 col-md-7 col-lg-5 mx-auto'>
                    <div class='card my-5'>
                        <div class='card-body'>
                            <h5 class="card-title text-center">Vous avez été déconnecté</h5>
                            <a href="/" class="btn btn-lg btn-primary btn-block text-uppercase">Retour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>