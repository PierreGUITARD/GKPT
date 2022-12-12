
<!-- bouton logout ferme la session en cours et reviens sur login.php -->
<?php
   session_start();
   session_destroy();
   session_regenerate_id();
   
   header('location: login.php');
?>