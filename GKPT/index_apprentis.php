<?php
require_once('config.php');
include(ROOT_PATH. '/includes/head_section.php');
include(ROOT_PATH. '/includes/public_functions.php');
?>

<title>GKPT | Accueil | Apprentis </title>
</head>

<body>

<!-- Contenu de la page -->

<article class="container">

<!-- Barre de navigation -->

<?php 
include(ROOT_PATH.'/includes/navbar_apprentis.php'); 
?>

<!-- // Barre de navigation-->

<h1 style="text-align: center;">Les machines</h1>


<div class="row">
    <div class="col-1">
        <h2>Machine à café</h2>
        <h3>Big description</h3>
        <p>small description</p>
        <h4>some detail</h4>
        <button type="button" onclick='location.href="html/machine_cafe.html"'>Voir La machine à café</button>
    </div>
    <div class="col-2">
        <img src="static/images/photo_machines/machine_cafe.jpg" 
        srcset="static/images/photo_machines/machine_cafe(400²).jpg 400w,
        static/images/photo_machines/machine_cafe(800²).jpg 800w"
        sizes="400px,800px(max_width:800px)"
        class="bigThumbnail">
    </div>
</div>
<div class="row">
    <div class="col-1">
        <h2>Hydraulis</h2>
        <h3>Big description</h3>
        <p>small description</p>
        <h4>some detail</h4>
        <button type="button" onclick='location.href="html/hydraulis.html"'>Voir Hydraulis</button>
    </div>
    <div class="col-2">
        <img src="static/images/photo_machines/hydraulis.jpg" 
        srcset="static/images/photo_machines/hydraulis(400²).jpg 400w,
        static/images/photo_machines/hydraulis(800²).jpg 800w"
        sizes="400px,800px(max_width:800px)"
        class="bigThumbnail">
    </div>
</div>
<div class="row">
    <div class="col-1">
        <h2>Bras robot</h2>
        <h3>Big description</h3>
        <p>small description</p>
        <h4>some detail</h4>
        <button type="button" onclick='location.href="html/bras_robot.html"'>Voir Le bras robot</button>
    </div>
    <div class="col-2">
        <img src="static/images/photo_machines/bras_robot.jpg" 
        srcset="static/images/photo_machines/bras_robot(400²).jpg 400w,
        static/images/photo_machines/bras_robot(800²).jpg 800w"
        sizes="400px,800px(max_width:800px)"
        class="bigThumbnail">
    </div>
</div>
<div class="row">
    <div class="col-1">
        <h2>Bras levier</h2>
        <h3>Big description</h3>
        <p>small description</p>
        <h4>some detail</h4>
        <button type="button" onclick='location.href="html/bras_levier.html"'>Voir Le bras levier</button>
    </div>
    <div class="col-2">
        <img src="static/images/photo_machines/levier.jpg" 
        srcset="static/images/photo_machines/levier(400²).jpg 400w,
        static/images/photo_machines/levier(800²).jpg 800w,"
        class="bigThumbnail">
    </div>
</div>
<!-- <div class="row">
    <div class="col-1">
        <h2>Panneau</h2>
        <h3>Virage à 90</h3>
        <p>Droite à font</p>
        <h4>some detail</h4>
        <button type="button" onclick='location.href="https://www.google.com/maps/place/Le+Saint-Buisson+%E2%9C%9D/@48.6110267,2.3493719,285m/data=!3m1!1e3!4m5!3m4!1s0x47e5dd59ead4153d:0x9f3a6c56bf296f9d!8m2!3d48.6111897!4d2.3496038"'>Voir le saint Buisson</button>
    </div>
    <div class="col-2">
        <img src="static/images/droite_a_font.png" class="bigThumbnail">
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
