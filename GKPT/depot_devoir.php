<?php
    require_once('config.php');
    include(ROOT_PATH. '/includes/head_section.php');
    include(ROOT_PATH. '/includes/public_functions.php');
?>

<title>Projet 0 papier | ajout de compte-rendu</title>
<link rel="stylesheet" href="static/css/depot_devoir.css">
</head>
<header>
    <h1 class="title" style="text-align: center;">Déposer un compte-rendu</h1>
</header>
<body>
        <?php 
            include(ROOT_PATH.'/includes/navbar_apprentis.php'); 
        ?>
    <div class="container">
        <div class = "item">
            <label for="avatar">ajouter un doc : </label>
            <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
        </div>
        <div class = "item2">
            <label for ="information_document">Nom du document : 
                <input type="text" id="name">
                <button id="soumettre">soumettre</button>
            </label>
        </div>
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