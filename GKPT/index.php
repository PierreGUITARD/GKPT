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
<!-- <div class="row">
    <div class="col-1">
        <h2>Machine à café</h2>
        <h3>Big description</h3>
        <p>small description</p>
        <h4>some detail</h4>
        <button type="button" onclick='location.href="html/machine_cafe.html"'>local access</button>
    </div>
    <div class="col-2">
        <img src="static/images/machine_cafe.jpg" class="bigThumbnail">
    </div>
</div>
<div class="row">
    <div class="col-1">
        <h2>Hydraulis</h2>
        <h3>Big description</h3>
        <p>small description</p>
        <h4>some detail</h4>
        <button type="button" onclick='location.href="html/hydraulis.html"'>local access</button>
    </div>
    <div class="col-2">
        <img src="static/images/hydraulis.jpg" class="bigThumbnail">
    </div>
</div>
<div class="row">
    <div class="col-1">
        <h2>Small<br>Widget</h2>
        <h3>Big description</h3>
        <p>small description</p>
        <h4>some detail</h4>
        <button type="button" onclick='location.href="Assets/missing.png"'>local access</button>
    </div>
    <div class="col-2">
        <img src="Assets/missing.png" class="thumbnail">
    </div>
</div>
<div class="row">
    <div class="col-1">
        <h2>Small<br>Widget</h2>
        <h3>Big description</h3>
        <p>small description</p>
        <h4>some detail</h4>
        <button type="button" onclick='location.href="Assets/missing.png"'>local access</button>
    </div>
    <div class="col-2">
        <img src="Assets/missing.png" class="thumbnail">
    </div>
</div> -->
<!-- footer -->

<?php 
include(ROOT_PATH.'/includes/footer.php');
?>

<!-- // footer -->

</article>

<!-- // Contenu de la page -->

</body>

</html>