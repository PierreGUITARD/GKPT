<!-- bouton logout ferme la session en cours et reviens sur login.php -->
<?php
   session_start();
   // regénération de l'id de session pour éviter la fixation de session
   session_regenerate_id();
   // destruction de la session en cours
   session_destroy();
   
   header('location: index.php');
?>