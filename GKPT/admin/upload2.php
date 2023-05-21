<?php

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
                $fileDestination = '../ressouces/Consignes/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
                header("Location: ajouter_devoir.php?uploadsuccess");
                echo "<script>alert(\"Devoir ajouté.\")</script>";
        } else {
            echo "there was an error uploading your file !";
        }
    } else {
        echo" you cannot upload file of this type !";
    }
}

