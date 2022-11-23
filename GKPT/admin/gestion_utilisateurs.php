<?php

$sql = "SELECT  `email`,'mot_de_passe_edt'  FROM `utilisateurs`";
$resultat = mysqli_query($connect,$requete_sql);
$resultat_requete = mysqli_fetch_all($resultat,MYSQLI_ASSOC);

// foreach($resultat_requete as $document){
//     $email = ['email'];
//     $mot_de_passe_edt = ['mot_de_passe_edt'];
//     $email = .$document["chemin"];
//     // echo $chemin_acces_pdf;
//     ?>
//     <li src="<?php echo $chemin_acces_pdf; ?>"></li>
//     <li src="<?php echo $chemin_acces_pdf; ?>"></li>
// <?php 
// }; 
// ?> 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>