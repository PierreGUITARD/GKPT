<?php
    require_once('config.php');
    include(ROOT_PATH. '/includes/head_section.php');
    include(ROOT_PATH. '/includes/public_functions.php');
?>

    <title>GKPT | Accueil</title>
    </head>

    <body>
    <!-- Contenu de la page -->
    <div class="container" align="center">
        <?php 
            include(ROOT_PATH.'/includes/navbar_apprentis.php'); 
        ?>
    <!-- bannière -->
        <?php 
            include(ROOT_PATH.'/includes/banner.php');
        ?>
    <!-- // bannière -->
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
                <button type="button" onclick='location.href="https://www.google.com/maps/place/Buisson+du+Saint+Chabrier/@48.5942342,2.3426642,241m/data=!3m1!1e3!4m5!3m4!1s0x47e5db48c01d3681:0xc7f2c90372b2be17!8m2!3d48.5943158!4d2.3432546"'>Voir le saint Buisson</button>
            </div>
            <div class="col-2">
                <img src="static/images/droite_a_font.png" class="bigThumbnail">
            </div>
        </div> -->
    <!-- footer -->
        <?php 
            include(ROOT_PATH.'/includes/footer.php');
        ?>
    </div>
    <!-- // Contenu de la page -->
    </body>
</html>