<?php

require_once('config.php');
include(ROOT_PATH. '/includes/head_section.php');
include(ROOT_PATH. '/includes/public_functions.php');

$Email= cleanchamp($_POST['mail']);
$MDP_Utilisateur = cleanchamp($_POST['password']);

$sql =  "SELECT * FROM utilisateurs WHERE email='$Email'  LIMIT 1";
$result = mysqli_query($connect, $sql);
print_r($result);
if (mysqli_num_rows($result)> 0){
    $result1 = mysqli_fetch_assoc($result);
    if (password_verify($MDP_Utilisateur,$result1['MDP_Utilisateur'])){
        $_SESSION['message'] = " Vous êtes connecté";
        if ($result1['statut'] == 1 ) { 
            header('location:'.BASE_URL.'/index_apprentis.php');
        }

        else {
            header('location:'.BASE_URL.'/index_formateurs.php');
            }
        }
    else {
        $_SESSION['message'] = "Veuillez entrer des identifiants valides";
        header('location:'.BASE_URL.'/index.php');
    }
}
else {
    $_SESSION['message'] = "Veuillez entrer des identifiants valides";
    header('location:'.BASE_URL.'/index.php');

}   

function cleanchamp(string $aNettoyer) {
    global $connect;
    $propre = trim($aNettoyer);
    $propre = mysqli_real_escape_string($connect, $propre);

    return $propre;
}
?>
