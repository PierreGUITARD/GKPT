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
// include(ROOT_PATH.'/includes/banner.php');
?>

<!-- // bannière -->


<h1 style="text-align: center;background-color: lightgrey;">Les machines</h1>


<div class="row">
    <div class="col-1">
        <h2>Machine à café</h2>
        <h3>Big description</h3>
        <p>small description</p>
        <h4>some detail</h4>
        <button type="button" onclick='location.href="HTML/machine_cafe.php"'>Voir La machine à café</button>
    </div>
    <div class="col-2">
        <img src="static/images/photo_machines/machine_cafe.jpg" 
        srcset="static/images/photo_machines/machine_cafe(400²).jpg 400w,
        static/images/photo_machines/machine_cafe(800²).jpg 800w"
        sizes="400px,800px(max_width:800px)"
        size
        class="bigThumbnail"
        alt="Machine à café"
        content="Author: Gaëtan Styskal">
    </div>
</div>
<div class="row">
    <div class="col-1">
        <h2>Hydraulis</h2>
        <h3>Big description</h3>
        <p>small description</p>
        <h4>some detail</h4>
        <button type="button" onclick='window.location.href="html/hydraulis.php";'>Voir Hydraulis</button>
    </div>
    <div class="col-2">
        <img src="static/images/photo_machines/hydraulis.jpg" 
        srcset="static/images/photo_machines/hydraulis(400²).jpg 400w,
        static/images/photo_machines/hydraulis(800²).jpg 800w"
        sizes="400px,800px(max_width:800px)"
        class="bigThumbnail"
        alt="Hydraulis"
        content="Author: Gaëtan Styskal">
    </div>
</div>
<div class="row">
    <div class="col-1">
        <h2>Bras robot</h2>
        <h3>Big description</h3>
        <p>small description</p>
        <h4>some detail</h4>
        <button type="button" onclick='location.href="html/bras_robot.php"'>Voir Le bras robot</button>
    </div>
    <div class="col-2">
        <img src="static/images/photo_machines/bras_robot.jpg" 
        srcset="static/images/photo_machines/bras_robot(400²).jpg 400w,
        static/images/photo_machines/bras_robot(800²).jpg 800w"
        sizes="400px,800px(max_width:800px)"
        class="bigThumbnail"
        alt="Bras robot Stäubli"
        content="Author: Gaëtan Styskal">
    </div>
</div>
<div class="row">
    <div class="col-1">
        <h2>Bras levier</h2>
        <h3>Big description</h3>
        <p>small description</p>
        <h4>some detail</h4>
        <button type="button" onclick='location.href="html/bras_levier.php"'>Voir Le bras levier</button>
    </div>
    <div class="col-2">
        <img src="static/images/photo_machines/levier.jpg" 
        srcset="static/images/photo_machines/levier(400²).jpg 400w,
        static/images/photo_machines/levier(800²).jpg 800w,"
        class="bigThumbnail"
        alt="Bras levier"
        content="Author: Gaëtan Styskal">
    </div>
</div>

<?php 
include(ROOT_PATH.'/includes/footer.php');
?>

<!-- // footer -->

</article>

<!-- // Contenu de la page -->

</body>

</html>
