<?php

require_once('config.php');
include(ROOT_PATH. '/includes/head_section.php');
include(ROOT_PATH. '/includes/public_functions.php');

// prend les valeurs "propres" des champs ayant les nom 'mail' et 'password' du formulaire de connexion
$Email= cleanchamp($_POST['mail']);
$MDP_Utilisateur = cleanchamp($_POST['password']);

// construction de la requête
$sql =  "SELECT * FROM utilisateurs WHERE email='$Email'  LIMIT 1";
// envoi de la requête
$result = mysqli_query($connect, $sql);
// verification de la connexion a la bdd
if (mysqli_num_rows($result)> 0){
// création d'un tableau associatif de $result
    $result1 = mysqli_fetch_assoc($result);
// password_verify vérifie que le mot de passe concorde avec le mot de passe hashé
    if (password_verify($MDP_Utilisateur,$result1['MDP_Utilisateur'])){
// la condition vérifie la valeur de la colonne 'statut' : 0 = formateur, 1 = apprenti et renvoi à l'index associé
// si la colonne est vide l'utilisateur est renvoyé au formulaire de connexion
        if ($result1['statut'] == 0 ) { 
            header('location:'.BASE_URL.'/index_formateurs.php');
        }

        else {
            header('location:'.BASE_URL.'/index_apprentis.php');
            }
        }
    else {
        header('location:'.BASE_URL.'/index.php');
    }
}
else {
    header('location:'.BASE_URL.'/index.php');

}   

// la fonction cleanchamp supprime les espaces non nécessaires du champ du formulaire
function cleanchamp(string $aNettoyer) {
    global $connect;
// trim retire les espaces avant et après une chaine de caractère
    $propre = trim($aNettoyer);
// la chaine propre devient utilisable pour les requêtes SQL (échappe les caractères)
    $propre = mysqli_real_escape_string($connect, $propre);

    return $propre;
}
?>
