<?php
    require_once('config.php');
    include(ROOT_PATH. '/includes/head_section.php');
    include(ROOT_PATH. '/includes/public_functions.php');
?>

    <?php
$Devoirs = getDevoirs();
if ($result['id_systeme'] = 1){
// parcours le tableau associatif crée par getDevoirs et traite chaque utilisateur un à un
 foreach ($Devoirs as $Devoir): ?>

<!-- renvoi le nom_utilisateur et la date de soumission  -->
     <?php echo $Devoir['nom_utilisateur'] ?>
     <?php echo $Devoir['date_soumission'] ?>

<?php endforeach;
}
?>