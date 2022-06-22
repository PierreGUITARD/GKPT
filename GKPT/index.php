<?php
require_once('GKPT\config.php');
include(ROOT_PATH. 'GKPT\includes\head_section.php');
include(ROOT_PATH. 'GKPT\includes\public_functions.php');
?>

<title>GKPT | Acceuil</title>
</head>

<body>

<!-- Contenu de la page -->

<article class="container">

<!-- Barre de navigation -->

<?php 
include(ROOT_PATH.'GKPT\includes\navbar.php'); 
?>

<!-- // Barre de navigation-->

<!-- bannière -->

<?php 
include(ROOT_PATH.'GKPT\includes\banner.php');
?>

<!-- // bannière -->

<h1>Les machines</h1>
<a href="GKPT\HTML\machine_cafe.html" title="machine à café"><img src="GKPT\Photo_machine\machine_cafe.jpg"></img></a>

<!-- footer -->

<?php 
include(ROOT_PATH.'GKPT\includes\footer.php');
?>

<!-- // footer -->

</article>

<!-- // Contenu de la page -->

</body>

</html>