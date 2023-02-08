<!-- $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);

    $result = mysql_query("select * from utilisateurs where email = '$email' and mdp_utilisateur = '$password'")
            or die("Failed to query datebase".mysql_error());
    $row = mysql_fetch_array($result);
    if($row['email']== $email&& $row['password']== $password){
        echo "Login success!! Welcome ".$row['email'];
        header("Location: ajouter_etudiant_func.php?loginsuccess");
    } else {
        echo "Failed to log in";
    } -->