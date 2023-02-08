<?php
include "../config.php";
	global $connect;
	if(isset($_POST['submit'])){
        global $email;
        global $password;
        
        $nom_utilisateur = $_POST['nom_utilisateur'];
        $email = $_POST['email'];

        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890&!?%';
        $password = substr(str_shuffle($alphabet),0,8);

        // $hash_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO `utilisateurs`(`nom_utilisateur`, `email`, `mdp_utilisateur`) VALUES ('$nom_utilisateur','$email', '$password')";

        $result = mysqli_query($connect , $sql);

        if($result){
            header("Location: dashboard.php?msg=New record created connect $connect fully");
        }
        else {
            echo "Failed: " . mysqli_error($connect );
        }

    }
    elseif(isset($_POST['suppression'])){
        $utilisateur_selectionnee = $_POST['utilisateurs'];

        $sql_delete = "DELETE FROM `utilisateurs` WHERE `nom_utilisateur` = '$utilisateur_selectionnee';";
        echo $sql_delete;
        
        global $result;
        $result = mysqli_query($connect , $sql_delete);
        header("Location: ../admin/ajouter_etudiant.php");
    }

    elseif(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        // slq injection 
        $username = stripcslashes($username);
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
        }
    }
