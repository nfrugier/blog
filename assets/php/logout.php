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
    <body class="bg-secondary">
    <?php include("../../navbar.php") ?>
        <div class='container'>
            <div class='row'>
                <div class='col-sm-9 col-md-7 col-lg-5 mx-auto'>
                    <div class="alert alert-danger text-center" role="alert">
                        Vous avez été déconnecté !
                        <br><a href="/" class="btn btn-success">OK</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>