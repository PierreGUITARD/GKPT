<?php 
/* * * * * * * * * * * * * * *
* Renvoie tous les systèmes
* * * * * * * * * * * * * * */
function getSystems() {
	// utilise l'objet global $connect  pour la connexion à la base de données
	global $connect;
	
	// construction de la requête
	$sql = "SELECT * FROM systeme";
	
	// envoie de la requete
	$result = mysqli_query($connect, $sql);
	
	// récupère tous les messages sous la forme d’un tableau $machines

	$machines = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $machines;
}

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


function Connexion(){
    // prend les valeurs "propres" des champs ayant les nom 'mail' et 'password' du formulaire de connexion
$Email= cleanchamp($_POST['mail']);
$MDP_Utilisateur = cleanchamp($_POST['password']);

// construction de la requête
$sql =  "SELECT * FROM utilisateurs WHERE email=$Email";
// envoi de la requête
global $connect;
$result = mysqli_query ($connect, $sql);
// verification de la connexion a la bdd
if (mysqli_num_rows($result)> 0){
// création d'un tableau associatif de $result
global  $result1;
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
$estConnecté = mysqli_fetch_all(($result1['statut']), MYSQLI_ASSOC);
return $estConnecté;  
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

function getDevoirs(){
    global $connect;

    $sql =  "SELECT * FROM doc_pedago";

    $result = mysqli_query($connect, $sql);

    $NomsDates = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $NomsDates;

}

?>