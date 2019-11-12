<?php 

session_start();
require("bdd.php");
include("conf.global.php");


if(isset($_POST['login'])){
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;
    
    $sql = "SELECT id_user, login FROM users WHERE login = :username AND passwd = MD5(:passwd)";

    try {
        $stmt = $dbh->prepare($sql);
    
        $stmt->bindValue(':username', $username);
        $stmt->bindValue(':passwd', $passwordAttempt);
        
        $stmt->execute();
    }
    catch(PDOException $e) {
        print "Erreur ! : " .$e->getMessage(). "<br>";
        die();
    }
    
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if($user === false){
        die($GLOBALS['error_log']);
    } else {
        $_SESSION['login'] = $user["login"];
        $_SESSION['id'] = $user["id_user"];
        header('Location: ../../index.php');        
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['root'];?>assets/css/bootstrap.min.css" />
    </head>

    <body class="bg-secondary">
    <?php include("../../navbar.php") ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                        <div class="card-body">
                            <h5 class="card-title text-center">Connexion</h5>
                            <form class="form-signin" method="post">
                                <div class="form-label-group mb-2">
                                <input type="text" id="username" name="username" class="form-control" placeholder="Login" required autofocus>
                                </div>

                                <div class="form-label-group mb-2">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                                </div>

                                <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit" name="login">Connexion</button>
                                <a href="signin.php" class="btn btn-lg btn-primary btn-block text-uppercase" >Inscription</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>


</html>