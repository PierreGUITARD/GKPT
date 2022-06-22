<?php
/* Connection base de données */
$user = 'root';
$passwd = 'root';
$host = 'localhost';
$bdd = 'projet_site';
$connect = mysqli_connect($host,$user,$passwd,$bdd); 
if (!$connect)
die('Echec de connexion au serveur de base de données :'. mysqli_connect_error() . '(' . mysqli_connect_errno() .')');

$Nom_Utilisateur = $_POST['Nom_Utilisateur'];
$Prenom_Utilisateur = $_POST['Prenom_Utilisateur'];
$Email= $_POST['Email'];
$MDP_Utilisateur = $_POST['MDP_Utilisateur'];
$MDP_Utilisateur2 = $_POST['MDP_Utilisateur2'];
// S'assurer que l'utilisateur ne s'inscrive pas deux fois. 
// L'identifiant et le email doivent être uniques

$errors = array();

// Valider le  mot de passe

function check_mdp_format($MDP_Utilisateur)
    {
        $uppercase = preg_match('@[A-Z]@', $MDP_Utilisateur);
        $lowercase = preg_match('@[a-z]@', $MDP_Utilisateur);
        $number    = preg_match('@[0-9]@', $MDP_Utilisateur);
        $specialChars = preg_match('@[^\w]@', $MDP_Utilisateur);
        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($MDP_Utilisateur) < 12)
            {
            return false;
        }
        else{
            return true;
    }
}

$user_check_query = "SELECT * FROM `users` WHERE `Email`='$Email' LIMIT 1";

$result = mysqli_query($connect, $user_check_query);
$user = mysqli_fetch_assoc($result);

if ($user) { // si l'identifiant a déjà été choisit par un autre utilisateur
    if ($user['Email'] === $Email) {
      array_push($errors, "L'adresse mail existe déjà");
    }
}

/* récuperation des données du formulaire */

$Hash_MDP_Utilisateur = password_hash($MDP_Utilisateur, PASSWORD_BCRYPT);
$Hash_MDP_Utilisateur2 = password_hash($MDP_Utilisateur2, PASSWORD_BCRYPT);


/* affichage des données */
echo ' Merci d\'avoir complété le formulaire';
echo '<br/>','<br/>';
echo 'les informations sont envoyées à la base de données.<br/>base connectée ... <br\>';
echo '<br/>','<br/>';


// index.php
// header("Location: index.php", TRUE, 301);
// exit();

/* envoie des données */
$query = "INSERT INTO `users`(`Nom_Utilisateur`, `Prenom_Utilisateur`,`Email`, `MDP_Utilisateur`) VALUES ('$Nom_Utilisateur','$Prenom_Utilisateur','$Email', '$Hash_MDP_Utilisateur')";
$link = mysqli_connect("localhost", "root", "root", "db_taiga");
$result = mysqli_query($link, $query);

if(!$result)
    die('echec dans l\'insertion:'.mysqli_error($link));
echo 'Insertion réussie ... ';
mysqli_close($link);


?>
