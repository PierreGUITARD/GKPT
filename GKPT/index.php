<?php
require_once('config.php');
include(ROOT_PATH. 'includes\head_section.php');
include(ROOT_PATH. 'includes\public_functions.php');
?>

<title>GKPT</title>
</head>

<body>

<!-- Contenu de la page -->

<article class="container">

<!-- Barre de navigation -->

<?php 
include(ROOT_PATH.'includes\navbar.php'); 
?>

<!-- // Barre de navigation-->

<!-- bannière -->

<?php 
include(ROOT_PATH.'includes\banner.php');
?>

<!-- // bannière -->

<h1>Les machines</h1>
<a href="machine_cafe.html" title="machine à café"><img src="machine_cafe.jpg"></img></a>

<!-- footer -->

<?php 
include(ROOT_PATH.'includes\footer.php');
?>

<!-- // footer -->

</article>

<!-- // Contenu de la page -->

</body>

</html>