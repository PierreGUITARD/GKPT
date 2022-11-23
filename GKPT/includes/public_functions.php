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
?>
