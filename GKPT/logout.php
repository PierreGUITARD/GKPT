
<!-- bouton logout ferme la session en cours et reviens sur login.php -->
<?php
   session_start();
   unset($_SESSION["email"]);
   unset($_SESSION["MDP_Utilisateur"]);
   
   header('Refresh: 2; URL = login.php');
?>