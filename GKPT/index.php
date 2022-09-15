<?php
require_once('config.php');
include(ROOT_PATH. '/includes/head_section.php');
include(ROOT_PATH. '/includes/public_functions.php');
?>

<title>GKPT | Accueil</title>
</head>

<body>

<!-- Contenu de la page -->

<article class="container">

<!-- Barre de navigation -->

<?php 
include(ROOT_PATH.'/includes/navbar.php'); 
?>

<!-- // Barre de navigation-->

<!-- bannière -->

<?php 
include(ROOT_PATH.'/includes/banner.php');
?>

<!-- // bannière -->

<h1>Les machines</h1>
<?php
$machines = getSystems();

 foreach ($machines as $machine): ?>
    <section >
         <img src="<?php echo BASE_URL. '/static/images/'. $machine['photo']?>">
         <!-- <img src="http://localhost/GKPT/static/images/machine_cafe.jpg"> -->
        <span><?php echo $machine['nom_systeme'] ?></span>
    </section>
<?php endforeach
?>

<!-- <a href="html/machine_cafe.html" title="machine à café"><img src="photo_machine/machine_cafe.jpg" style="width: 500px; height: 500px"></img></a>
<a href="html/hydraulis.html" title="machine à café"><img src="photo_machine/hydraulis.jpg" style="width: 500px; height: 500px"></img></a>
<a href="html/bras_robot.html" title="machine à café"><img src="photo_machine/bras_robot.jpg" style="width: 500px; height: 500px"></img></a>
<a href="html/bras_levier.html" title="machine à café"><img src="photo_machine/levier.jpg" style="width: 500px; height: 500px"></img></a> -->

<!-- footer -->

<?php 
include(ROOT_PATH.'/includes/footer.php');
?>

<!-- // footer -->

</article>

<!-- // Contenu de la page -->

</body>

</html>