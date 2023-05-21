<?php

    include "../config.php";
    include(ROOT_PATH. './includes/public_functions.php');
    include(ROOT_PATH.'./includes/navbar.php'); 
    include(ROOT_PATH.'.upload.php'); 
    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter des ressources</title>
    <!-- Bootstrap  OPTIONEL -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: blue; color:white;">
        Ajouter d'un Documment
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Ajouter d'un Documment</h3>
            <p class="text-muted">Completez le formulaire ci-dessous afin d'ajouter un documment</p>
        </div>

        <div class="container  justify-content-center ">

        <form method="post" style="width:10vw; min-width:700px;" enctype="multipart/form-data" action="upload.php">
                <div class="col mb-3 pr-50">
                    <label class="form-label">nom du documment</label>
                    <input type="text" class="form-control" name="nom_doc_pedago">
                </div>
                <div class="col mb-3 pr-50">
                    <input type="file"  name="file" >
                </div>
                <!-- <div class="col mb-3 pr-50">
                    <input type="file" id="image" name="file">
                </div> -->
               <div>
                <input type="submit2" class="btn btn-success mb-3" name="submit">
                <a href="dashboard.php" class="btn btn-danger mb-3 ml-3">Annuler</a>
               </div>
            </form>
        </div>
    </div>

<!-- Bootstrap OPTIONEL -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>