<?php
    require_once('../config.php');
    include(ROOT_PATH. '../includes/head_section.php');
    include(ROOT_PATH. '../includes/public_functions.php');

?>

<title>Bras robot</title>
</head>
<header>
    <h1 class="title" style="text-align: center;">Bras robot</h1>
</header>
<body>

<div class="container">
        <h1>Déscription génerale</h1>

        <?php
            $requete_sql = "SELECT * FROM `doc_technique` WHERE `id_Systeme` = 3 ;";
            $resultat = mysqli_query($connect,$requete_sql);
            $resultat_requete = mysqli_fetch_all($resultat,MYSQLI_ASSOC);
            // print_r($resultat_requete);

            foreach($resultat_requete as $document){
                $chemin_acces_pdf = "../static/".$document["chemin"];
                // echo $chemin_acces_pdf;
                ?>
                <iframe src="<?php echo $chemin_acces_pdf; ?>" class="iframe_brasrobot"></iframe>
            <?php 
            }; 
            ?> 
        <hr>
    </div>
</body>
<footer>
    <a href="../"><h2 class="footer">&laquo; Retour en arrière</h2></a>
</footer>
<!-- footer -->
<?php 
include(ROOT_PATH.'/includes/footer.php');
?>
<!-- // footer -->
</article>
<!-- // Contenu de la page -->
</body>
</html>