<?php 

$name = (isset($_SESSION['login'])) ? "Bonjour ".$_SESSION['login'] : "Veuillez vous connecter";

?>

<nav class="navbar navbar-dark bg-light sticky-top shadow mb-5">
            <div clas="col-sm-7 col-md-7 col-lg-5">
                <a href="/" class="btn btn-darktext-uppercase">
                    <img src="/assets/img/blog.png" width="60" height="60" class="d-inline-block align-middle" alt="logo blog">
                </a>
            </div>
            <div  class="col-sm-7 col-md-7 col-lg-6 mx-auto">
                <h2 class="card-title text-center align-middle"><?php echo $name;?>&nbsp;&nbsp;</h2>
            </div>
            <div clas="col-sm-7 col-md-7 col-lg-7">
                
                <?php if(isset($_SESSION['login'])) :?>
                    <a href="<?php echo $GLOBALS['root'];?>assets/php/add_art.php" class="btn btn-success text-uppercase">Add</a>
                    <a href="<?php echo $GLOBALS['root'];?>assets/php/logout.php" class="btn btn-danger text-uppercase">x</a>
                <?php else :?>
                    <a href="<?php echo $GLOBALS['root'];?>assets/php/login.php" class="btn btn-success text-uppercase">Login</a>
                <?php endif?>
            </div>
</nav>