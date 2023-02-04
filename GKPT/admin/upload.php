<?php
// print_r($_FILES);
// $fichier = $_FILES["file"]["name"];

if(isset($_POST["submit"])){
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','pdf', 'docx', 'png');

    if(in_array($fileActualExt,$allowed)){
        if($fileError === 0){
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination = '../ressouces/devoirs/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
                header("Location: ajouter_devoir.php?uploadsuccess");
           
        } else {
            echo "there was an error uploading your file !";
        }
    } else {
        echo" you cannot upload file of this type !";
    }
}



// $extention = pathinfo($fichier, PATHINFO_EXTENSION);
// if  ($_SERVER["REQUEST_METHOD"] != "POST"){
//     exit("POST request methode required");

//     switch($_FILES['file']['error']){
//         case UPLOAD_ERR_PARTIAL:
//             exit("Le fichier n'est que partiellement téléchargé");
//             break;
//         case UPLOAD_ERR_NO_FILE:
//             exit("aucun fichier n'a été téléchargé");
//             break;
//         case UPLOAD_ERR_EXTENSION:
//             exit("Téléchargement de fichier arrêté par une extension php");
//             break;
//         case UPLOAD_ERR_FORM_SIZE:
//             exit("Le fichier dépasse MAX_FIL_SIZE dans le formulaire html");
//             break;
//         default:
//             exit("erreur de téléchargement inconnue");
//     }
// }
// // si plus grand que 1MB 
// if ($_FILES["file"]["size"] > 1048576){
//     exit("File too large (max 1MB)");
// }

// // type de doc accpecter

// $mimn_type = ["pdf","docx"];
// if(! in_array($extention ,$mimn_type)){
//     // print_r($_FILES);
//     exit("Fichier invalide");
// }
//  $filename = $_FILES["file"]["name"];

// $destination = __DIR__ . "/upload/" . $filename;
// move_uploaded_file($_FILES["file"]["tmp_name"], $destination);
// if(! move_uploaded_file($_FILES["file"]["tmp_name"], $destination)){
//     exit("chargement impossible ");
// }
// print_r($_FILES);