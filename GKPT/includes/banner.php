<section class="banner">

<aside class="welcome_msg">

<!-- <h1>Test Projet site</h1> -->

<?php
include(ROOT_PATH.'register.php');
?>

<div>
<!-- <img class="logo" src="static\images\logo-taiga.png" width="150" height="150"> -->
</div>

<a href="register.php" class="btn">Rejoignez nous!</a>


</aside>

<aside class="login_div">

<form action="index.php" method="post" >

<h2 align="char"><font color="white" style="text-align: center">Compte Client</font></h2>

<input type="text" name="username" placeholder="Identifiant" style="text-align: center; color:black">

<input type="password" name="password" placeholder="Mot de passe" style="text-align: center; color:black">

<button class="btn" type="submit" name="login_btn">Connectez-vous</button>

</form>

</aside>

</section> 