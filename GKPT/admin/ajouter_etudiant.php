<?php

include "../config.php";
include "../includes/public_functions.php";
include "ajouter_etudiant_func.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter des etudiants</title>
    <!-- Bootstrap  OPTIONEL -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: blue; color:white;">
        Ajouter des etudiants
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Ajouter Un Etudiant</h3>
            <p class="text-muted">Completez le formulaire ci-dessous afin d'ajouter un etudiant</p>
        </div>

        <div class="container  justify-content-center ">

        <form action="ajouter_etudiant_func.php" method="post" style="width:10vw; min-width:700px;">
                
                <div class="col mb-3 pr-50">
                    <label class="form-label">Nom Utilisteur </label>
                    <input type="text" class="form-control" name="nom_utilisateur" placeholder="Ton jolie nom" required>
                </div>
                <div class="col mb-3 pr-50">
                    <label class="form-label">Email: </label>
                    <input type="mail" class="form-control" name="email" placeholder="Djhon@aforp.eu" required>
                </div>
            
               <div>
                <button type="submit" class="btn btn-success mb-3" value="submit" name="submit">Sauvgarder</button>
                <a href="../index_formateurs.php" class="btn btn-danger mb-3 ml-3">Annuler</a>
               </div>
        
        </form>

        <br><br>

        <form action="" method="post" >
        <div class="container">
        <div class="text-center mb-4">
            <h3>Supprimer Un Etudiant</h3>
        </div>
        </div>

            <select name="utilisateurs" id="selection_utilisateur" required>
                <option value="">-- utilisateur à supprimer --</option>
            <?php
                $requete_sql = "SELECT `nom_utilisateur` FROM `utilisateurs` WHERE `statut` = 0;";
                $resultat = mysqli_query($connect,$requete_sql);
                $resultat_requete = mysqli_fetch_all($resultat,MYSQLI_ASSOC);
                // print_r($resultat_requete);

                foreach($resultat_requete as $utilisateurs){
                    $utilisateur = $utilisateurs['nom_utilisateur']
                ?>
                    <option value="<?php echo $utilisateur;?>"><?php echo $utilisateur;?></option>
                
                <?php
                    };
                    ?>
            </select>
                    
                    <?php
                    $requete_nb_utilisateur = "SELECT COUNT(*) FROM `utilisateurs` WHERE `statut` = 0;";//améliorer
                    $resultat_nbrequete = mysqli_query($connect,$requete_nb_utilisateur);
                    $resultat_requete_nbuser = mysqli_fetch_all($resultat_nbrequete,MYSQLI_ASSOC);
                    // getUSer_eleve();
                    foreach($resultat_requete_nbuser as $nb_users){
                        $utilisateur = $nb_users['COUNT(*)'];
                    }
                    ?>
                    <br><br>
                    <p>il y a actuellement <?php echo $utilisateur ?> étudiants</p>
                    <br>


                <a href="../admin/" onclick="return confirm('Êtes-vous sur de vouloir supprimer cet utilisateur?');">
                <button type="submit" class="btn btn-success mb-3" value="suppression" name="suppression">Suppression</button></a>
                <a href="../index_formateurs.php" class="btn btn-danger mb-3 ml-3">Annuler</a>
        </form>
            
        </div>
    </div>

<!-- Bootstrap OPTIONEL -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>