<?php

include "./config.php";
include "./includes/public_functions.php";
include "login_func.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Projet 0Papier / GKPT</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <a href="../index.php"> <img src="Images/logo ecole.png" class="thumbnail"> </a>
        <form action="login_func.php" method="post">
            <fieldset class="inner" align="center">
                <p class="Text">Authentification</p>
                <p class="Text2"><input type="email" class="required"  name="email" size="20" placeholder="Identifiant" required/><br/>
                <p class="Text2"><input type="password" class="required" name="password" size="20" placeholder="Mot de passe" required/><br/>
               <p><a href="mot_de_passe_oublie.php">mot de passe oublie ?</a></p>
                <input type="submit" class="button" value='login'  name="login"/>
            </fieldset>
        </form>
        <img src="Images/logo.png" class="watermark">
    </body>
</html>