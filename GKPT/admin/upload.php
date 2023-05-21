<?php
// print_r($_FILES);
// $fichier = $_FILES["file"]["name"];
include "../config.php";
	global $connect;
if(isset($_POST["submit"])){

        $nom_doc_pedago= $_POST['nom_doc_pedago'];
        $path = "../ressources/devoirs";
        $sql = "INSERT INTO `doc_pedago`( `nom_doc_pedago`, `chemin`,`date_soumission`,`date_exp`) VALUES ('$nom_doc_pedago','$path',now(), DATE_ADD(now(), INTERVAL 2 YEAR))";
        
        $result = mysqli_query($connect , $sql);
        
        if($result){
            echo "<script>alert(\"Devoir ajouté.\")</script>";
            header("Location: dashboard.php?msg=New record created connect $connect fully");
        }
        else {
            echo "Failed: " . mysqli_error($connect );
        }
       
    
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

if(isset($_POST["submit2"])){

    $nom_doc_pedago= $_POST['nom_doc_pedago'];
    $path = "../ressources/consignes";
    $sql = "INSERT INTO `doc_pedago`( `nom_doc_pedago`, `chemin`,`date_soumission`,`date_exp`) VALUES ('$nom_doc_pedago','$path',now(), DATE_ADD(now(), INTERVAL 2 YEAR))";
    
    $result = mysqli_query($connect , $sql);
    
    if($result){
        echo "<script>alert(\"Devoir ajouté.\")</script>";
        header("Location: dashboard.php?msg=New record created connect $connect fully");
    }
    else {
        echo "Failed: " . mysqli_error($connect );
    }
   

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