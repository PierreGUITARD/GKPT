<?php
    require_once('config.php');
    include(ROOT_PATH. '/includes/head_section.php');
    include(ROOT_PATH. '/includes/public_functions.php');
?>

    <title>GKPT | Accueil Formateur</title>
    </head>
<body>
    <!-- Contenu de la page -->


    <!-- Barre de navigation -->
    <?php 
    include(ROOT_PATH.'/includes/navbar_formateurs.php'); 
    ?>
    <!-- // Barre de navigation-->
    
    <br> <br>
    <article class="rectangle-gris">
        <?php
            $machines = getSystems();
            foreach ($machines as $machine): ?>
                <div class="row">
                    <div>
                        <h2><?php echo $machine['nom_systeme'] ?></h2>
                    </div>
                    <div>
                        <img class="bigThumbnail"  src="<?php echo BASE_URL. '/static/images/photo_machines/'. $machine['photo']?>"></br>
                        <button type="button" class="button-doc" onclick="location.href='<?php echo BASE_URL. '/systeme/'. $machine['lien']?>'">Pédago </button>
                        <button type="button" class="button-doc" onclick="location.href='<?php echo BASE_URL. '/systeme/'. $machine['lien']?>'">Technique</button>
                    </div>
                </div>
            <?php endforeach ?>
        <?php include(ROOT_PATH.'/includes/footer.php');?>
    </article>
    </body>
</html>
