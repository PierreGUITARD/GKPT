<?php
    
    define('ROOT_PATH', realpath(dirname(__FILE__)));
    define('BASE_URL', 'http://localhost/GKPT/');

    session_start();
    $host = 'localhost';
    $user = 'root';
    $passwd = 'root';
    $bdd = 'projet_site';
    $connect = mysqli_connect($host, $user, $passwd, $bdd);

if (!$connect){
    die("Error connecting to database: ".mysqli_connect_error());
}
// else{
//     echo("connecté");
// }
?>