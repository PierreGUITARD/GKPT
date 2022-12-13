    <?php
    require_once('../config.php');
    include(ROOT_PATH. '../includes/head_section.php');
    include(ROOT_PATH. '../includes/public_functions.php');
    ?>
    <title>Machine à café</title>
    </head>

    <body>
        <!-- Barre de navigation -->
        <?php include(ROOT_PATH.'/includes/navbar.php');?>
        <!-- // Barre de navigation--> 

        <!-- Contenu de la page -->
        <article class="rectangle-gris-page-systeme">
            <h1 class="overlay-systeme">Machine à café</h1>
                <?php
                    $requete_sql = "SELECT * FROM `doc_technique` WHERE `id_Systeme` = 1 ;";
                    $resultat = mysqli_query($connect,$requete_sql);
                    $resultat_requete = mysqli_fetch_all($resultat,MYSQLI_ASSOC);
                    // print_r($resultat_requete);

                    foreach($resultat_requete as $document){
                        $chemin_acces_pdf = "../".$document["chemin"];
                        // echo $chemin_acces_pdf;
                ?>
                <div class ='row-systeme'>
                    <iframe class="pdf" src="<?php echo $chemin_acces_pdf; ?>" class="iframe_machinecafe"></iframe>
                </div>
                <?php 
                }; 
                ?>
        </article>
        <?php include(ROOT_PATH.'/includes/footer.php');?>
    </body>
</html>