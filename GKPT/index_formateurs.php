<?php
    require_once('config.php');
    include(ROOT_PATH. '/includes/head_section.php');
    include(ROOT_PATH. '/includes/public_functions.php');
?>

    <title>GKPT | Accueil | Formateurs</title>
    </head>

<body>
<!-- Contenu de la page -->

<article class="container">

<!-- Barre de navigation -->
<?php 
include(ROOT_PATH.'/includes/navbar_formateurs.php'); 
?>

<!-- // Barre de navigation-->


<br> <br>

<?php
$machines = getSystems();

 foreach ($machines as $machine): ?>
    <div class="row">
        <div class="col-1">
            <h2><?php echo $machine['nom_systeme'] ?></h2>
            <h3><?php echo $machine['description'] ?></h3>
            <p><?php echo $machine['description'] ?></p>
            <h4></h4>
            <button type="button" onclick="location.href='<?php echo BASE_URL. '/HTML/'. $machine['lien']?>'"> Voir <?php echo $machine['nom_systeme'] ?></button>
        </div>
        <div class="col-2">
            <img class="bigThumbnail" src="<?php echo BASE_URL. '/static/images/photo_machines/'. $machine['photo']?>">
        </div>
    </div>
<?php endforeach
?>
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
 <?php   include(ROOT_PATH.'/includes/footer.php'); 
 ?>

<!-- // footer -->

</article>

    </body>

</html>
