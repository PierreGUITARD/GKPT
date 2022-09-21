<?php
session_start();
$user = 'root';
$password = 'root';
$db = 'datacollectioncenter';
$host = 'localhost';

$success = mysqli_connect($host, $user, $password, $db);
if (!$success){
    die("Error with the database: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
}
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST["mail"];
$pass = $_POST["pass"];
$word = md5($pass);
mysqli_query($success, "SET NAMES UTF8");
$result = mysqli_query($success, "INSERT INTO information_client (nom, prenom, mail, pass) VALUES ('$nom', '$prenom', '$mail', '$word')");
if (!$result){
    die("Error with the database: " . mysqli_error($success) . " (" . mysqli_connect_errno() . ")");
}

mysqli_close($success);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Data Collection Center</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1 class="Title" align="center">Hello again.</h1>
        <form action="/DataCollectionCenter" method="post">
            <fieldset class="inner" align="center">
                <legend class="legend">Thank you for letting ur collect yuo're data!</legend>
                <p class="Text">Now click on the button below to receive a free cookie</p>
                <input type="submit" class="button" value='Give us even more data!'/>
            </fieldset><br/>
        </form>
    </body>
</html>