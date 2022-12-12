
<!-- bouton logout ferme la session en cours et reviens sur login.php -->
<?php
   session_start();
   session_destroy();
   
   header('location: login.php');
?>