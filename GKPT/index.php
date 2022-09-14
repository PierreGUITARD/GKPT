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
<a href="html/machine_cafe.html" title="machine à café"><img src="static/images/machine_cafe.jpg" style="width: 500px; height: 500px"></img></a>
<a href="html/hydraulis.html" title="machine à café"><img src="static/images/hydraulis.jpg" style="width: 500px; height: 500px"></img></a>
<a href="html/bras_robot.html" title="machine à café"><img src="static/images/bras_robot.jpg" style="width: 500px; height: 500px"></img></a>
<a href="html/bras_levier.html" title="machine à café"><img src="static/images/levier.jpg" style="width: 500px; height: 500px"></img></a>
<!-- footer -->

<?php 
include(ROOT_PATH.'/includes/footer.php');
?>

<!-- // footer -->

</article>

<!-- // Contenu de la page -->

</body>

</html>