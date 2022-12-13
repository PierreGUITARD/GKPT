<?php
    require_once('config.php');
    include(ROOT_PATH. '/includes/head_section.php');
    include(ROOT_PATH. '/includes/public_functions.php');
?>

    <title>GKPT | Accueil</title>
    </head>

<body>

<!-- Contenu de la page -->



<!-- Barre de navigation -->

<?php 
include(ROOT_PATH.'/includes/navbar.php'); 
?>

<!-- // Barre de navigation-->
<br> <br>
<article class="rectangle-gris">
    <?php
$machines = getSystems();

//  parcours le tableau associatif crée par getSystems et traite chaque machine une à une
 foreach ($machines as $machine): ?>
    <div class="row">
<!-- renvoi le nom_systeme de la machine  -->
        <h2><?php echo $machine['nom_systeme'] ?></h2>
<!-- concatène l'url avec la machine  -->
        <img class="bigThumbnail"  src="<?php echo BASE_URL. '/static/images/photo_machines/'. $machine['photo']?>"></br>
        <div class="row2">
<!-- crée un bouton qui redirige vers la doc technique et un autre vers la doc pédago -->
            <button type="button" class="button-doc" onclick="location.href='<?php echo BASE_URL. '/systeme/'. $machine['lien']?>'">Pédago </button>
            <button type="button" class="button-doc" onclick="location.href='<?php echo BASE_URL. '/systeme/'. $machine['lien']?>'">Technique</button>
        </div>
    </div>
<?php endforeach
?>
    </div>

<!-- footer -->

<?php 
include(ROOT_PATH.'/includes/footer.php');
?>

<!-- // footer -->

</article>

</body>

</html>
