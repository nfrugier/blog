<?php 

$GLOBALS['root'] = "/";
$GLOBALS['error_log'] = '
<html>
</html>
    <head>
        <title>ERREUR DE LOGIN</title>
        <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css"/>
    </head>
    <body class="bg-secondary">
    <nav class="navbar navbar-dark bg-danger sticky-top shadow mb-5">
            
    </nav>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto mt-15">
                    <div class="alert alert-danger text-center" role="alert">
                        Erreur de mot de passe ou de nom d\'utilisateur !
                        <br><a href="/" class="btn btn-success">RETOUR</a><a href="signin.php" class="btn btn-lg btn-primary btn-block text-uppercase mt-2" >Inscription</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>'

?>