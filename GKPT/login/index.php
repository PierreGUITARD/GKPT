<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Projet 0Papier / GKPT</title>
        <link rel="stylesheet" href="../static/css/style.css">
    </head>
    <body>
        <img src="../static/images/logo ecole.png" class="thumbnail3">
        <!-- a corriger une fois la connexion des utilisateurs est prete -->
        <form action="ex.php" method="post"> 
            <fieldset align="center">
                <p class="Text">Authentification</p><input type="email" class="required" name="mail" size="20" placeholder="Identifiant" required/></p>
                <p><input type="password" class="required" name="password" size="20" placeholder="Mot de passe" required/></p>
                <input type="submit" class="button" value='Se connecter'/>
            </fieldset>
        </form>
        <img src="../static/images/logo.png" class="watermark">
    </body>
</html>