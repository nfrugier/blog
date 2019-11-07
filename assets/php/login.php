<?php 

session_start();
require("bdd.php");
include("conf.global.php");


if(isset($_POST['login'])){
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;
    
    $sql = "SELECT id_user, login, passwd FROM users WHERE login = :username";
    $stmt = $dbh->prepare($sql);
    
    $stmt->bindValue(':username', $username);
    
    $stmt->execute();
    
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if($user === false){
        die('Combinaison Login/Pass incorrecte <br/><a href="/"><button>Retour</button></a>');
    } else {
        /**no security yet */
        $_SESSION['login'] = $username;
        header('Location: ../../index.php');
        exit;
        
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['root'];?>assets/css/bootstrap.min.css" />
    </head>

    <body>
        <h1 class="text-center">Blog</h1>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                        <div class="card-body">
                            <h5 class="card-title text-center">Connexion</h5>
                            <form class="form-signin" method="post">
                                <div class="form-label-group">
                                <input type="text" id="username" name="username" class="form-control" placeholder="Login" required autofocus>
                                <label for="inputEmail">Login</label>
                                </div>

                                <div class="form-label-group">
                                <input type="text" id="password" class="form-control" placeholder="Password" required>
                                <label for="inputPassword">Password</label>
                                </div>

                                <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit" name="login">Connexion</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>


</html>