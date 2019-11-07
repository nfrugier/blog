<?php 
    define('DB_HOST', getenv('MYSQL_SERVER'));
    define('DB_USER', getenv('MYSQL_USER'));
    define('DB_PASS', getenv('MYSQL_PASSWORD'));
    define('DB_BASE', getenv('MYSQL_DATABASE'));
    define('DB_CONN', 'mysql:host='.DB_HOST.';dbname='.DB_BASE);

    try {
        $dbh = new PDO(DB_CONN, DB_USER, DB_PASS);
    }
    catch(PDOException $e) {
        print "Erreur ! : " .$e->getMessage(). "<br>";
        die();
    }

?>