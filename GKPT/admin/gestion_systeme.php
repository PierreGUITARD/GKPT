<?php
    require_once('../config.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des systemes</title>
</head>
<body>
    <h2>Gestion des systemes</h2>
    <p>Completez le formulaire ci-dessous afin de gerer les systemes</p>

    <form action="" method="post" >

        <label for="suppression_systeme">Choisir un systeme à supprimer</label>
        
        <br><br>

        <select name="systemes" id="selection_machine" required>
            <option value="">-- systeme à supprimer --</option>
        <?php
            $requete_sql = "SELECT nom_systeme from systeme;";
            $resultat = mysqli_query($connect,$requete_sql);
            $resultat_requete = mysqli_fetch_all($resultat,MYSQLI_ASSOC);
            print_r($resultat_requete);
            
            foreach($resultat_requete as $machines){
                $machine = $machines['nom_systeme']
            ?>
                <option value="<?php echo $machine;?>"><?php echo $machine;?></option>
            
            <?php
                };
            ?>
            
        </select>
            
        <br><br>

        <button type="submit" class="" name="delete" value="delete">Sauvgarder</button>
        <a href="../" class="">Annuler</a>

    </form>
        <hr>
    <form action="" method="post" >
        <label>Ajouter un systeme</label>
        <br><br>
        <input type="text" name="ajout_nom_systeme" maxlength="100" placeholder="nom du systeme" required>
        <input type="text" name="ajout_nom_fabricant" maxlength="100" placeholder="nom du fabricant (Aforp par défaut)" required>
        <input type="text" name="ajout_description" maxlength="200" placeholder="description du systeme" required>
        <input type="text" name="ajout_photo" maxlength="250" placeholder="photo du systeme">
        <input type="number" name="ajout_numero_serie" placeholder="numero de série du systeme" required>
        <input type="text" name="ajout_chemin" maxlength="200" placeholder="chemin d'accès du systeme">
        
        <br><br>

        <button type="submit" class="" name="add" value="add">Sauvgarder</button>
        <a href="../" class="">Annuler</a>

    </form>
        <hr>
    <form action="" method="post" >
                <label>Modification d'un systeme</label>
                <br><br>
                <select name="systemes_edit" id="selection_machine_edit" required>
                <option value="">-- systeme à modifier --</option>
                <?php
                $requete_sql = "SELECT nom_systeme from systeme;";
                $resultat = mysqli_query($connect,$requete_sql);
                $resultat_requete = mysqli_fetch_all($resultat,MYSQLI_ASSOC);
                print_r($resultat_requete);
                
                foreach($resultat_requete as $machines){
                    $machine = $machines['nom_systeme']
                ?>
                    <option value="<?php echo $machine;?>"><?php echo $machine;?></option>
                
                <?php
                    };
                ?>
                <input type="text" name="edit_nom_systeme" maxlength="100" placeholder="nom du systeme" required>
                <input type="text" name="edit_nom_fabricant" maxlength="100" placeholder="nom du fabricant (Aforp par défaut)" required>
                <input type="text" name="edit_description" maxlength="200" placeholder="description du systeme" required>
                <input type="text" name="edit_photo" maxlength="250" placeholder="photo du systeme">
                <input type="number" name="edit_numero_serie" placeholder="numero de série du systeme" required>
                <input type="text" name="edit_chemin" maxlength="200" placeholder="chemin d'accès du systeme">
                
                <br><br>

                <button type="submit" class="" name="edit" value="edit">Sauvgarder</button>
                <a href="../" class="">Annuler</a>
    </form>

</body>
</html>

<?php
    // include "../config.php";

    if(isset($_POST['delete'])){
        $machine_selectionnee = $_POST['systemes'];

        $sql_delete = "DELETE FROM `systeme` WHERE `nom_systeme` = '$machine_selectionnee'";
        // echo $sql_delete;
        
        $result = mysqli_query($connect , $sql_delete);
    }
    
    else if(isset($_POST['add'])){
        $ajout_nomsysteme = $_POST['ajout_nom_systeme'];
        $ajout_nomfabricant = $_POST['ajout_nom_fabricant'];
        $ajout_description = $_POST['ajout_description'];
        $ajout_photo = $_POST['ajout_photo'];
        $ajout_numeroserie = $_POST['ajout_numero_serie'];
        $ajout_chemin = $_POST['ajout_chemin'];

        $sql_insert = "INSERT INTO `systeme`(`nom_systeme`, `nom_fabricant`, `description`, `photo`, `numero_serie`, `lien`) VALUES 
        ('$ajout_nomsysteme','$ajout_nomfabricant','$ajout_description','$ajout_photo',$ajout_numeroserie,'$ajout_chemin')";
        // echo $sql_insert;

        $result = mysqli_query($connect , $sql_insert);
    }

    elseif (isset($_POST['edit'])) {
        $edit_machine_selectionnee = $_POST['systemes_edit'];
        $edit_nomsysteme = $_POST['edit_nom_systeme'];
        $edit_nomfabricant = $_POST['edit_nom_fabricant'];
        $edit_description = $_POST['edit_description'];
        $edit_photo = $_POST['edit_photo'];
        $edit_numeroserie = $_POST['edit_numero_serie'];
        $edit_chemin = $_POST['edit_chemin'];

        $sql_update = "UPDATE `systeme` SET `nom_systeme` = '$edit_nomsysteme', `description` = '$edit_description', `photo` = '$edit_photo', `numero_serie` = $edit_numeroserie, `lien` = '$edit_chemin' 
        WHERE `systeme`.`nom_systeme` = '$edit_machine_selectionnee'";
        // echo $sql_update;

        $result = mysqli_query($connect , $sql_update);
    }
    
?>