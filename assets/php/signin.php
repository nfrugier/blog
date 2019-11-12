<?php 
require("bdd.php");
include("conf.global.php");

if(isset($_POST['signin'])){
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    $username = $_POST["username"];
    $email = $_POST["email"];

    if($_POST['password'] === $_POST[('passwordConfirm')]) {
        $password = $_POST["password"];
    } else {
        die('les deux mots de passe sont différents <br/><a href="/" class="btn btn-primary">Retour</a>');
    }

    $sql = "INSERT INTO users SET email=:email, login=:login, passwd= MD5(:passwd)";
    

    try {
        $stmt = $dbh->prepare($sql);

        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':login', $username);
        $stmt->bindValue(':passwd', $password);

        $stmt->execute();
    }
    catch(PDOException $e) {
        print "Erreur ! : " .$e->getMessage(). "<br>";
        die();
    }

    $_SESSION['login'] = $username;
    header('Location: ../../index.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Inscription</title>
        <link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['root'];?>assets/css/bootstrap.min.css" />
    </head>

    <body class="bg-secondary">
    <?php include("../../navbar.php") ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                        <div class="card-body">
                            <h5 class="card-title text-center">Inscription</h5>
                            <form class="form-signin" method="post">
                                <div class="form-label-group">
                                <input type="text" id="username" name="username" class="form-control" placeholder="Login" required autofocus>
                                </div>

                                <div class="form-label-group">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email@" required>
                                </div>

                                <div class="form-label-group">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                                </div>

                                <div class="form-label-group">
                                <input type="password" id="passwordConfirm" name="passwordConfirm" class="form-control" placeholder="Password" required>
                                </div>

                                <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit" name="signin">Inscription</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>


</html>