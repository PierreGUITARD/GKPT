<?php
    define('BASE_URL', 'http://172.16.0.3/GKPT/');
    define('ROOT_PATH', realpath(dirname(BASE_URL)));

    session_start();
    $host = 'localhost';
    $user = 'root';
    $passwd = 'root';
    $bdd = 'projet_site';
    $connect = mysqli_connect($host, $user, $passwd, $bdd);

if (!$connect){
    die("Error connecting to database: ".mysqli_connect_error());
}
else{
    echo("connecté");
}
?>