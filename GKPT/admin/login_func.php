<?php
include "../config.php";
global $connect;
if(isset($_POST['email']) && isset($_POST['password'])){
    function validate($data){
        $data= trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $email = validate($_POST['email']);
    $password = validate($_POST['password']); 
    if(empty($email) || empty($password)){
        header("Location: login.php?error=emailOrPasswordEmpty");
        exit();
    }else{
        echo "Information Valid";
    }
}
else {
    header("Location: login.php");
    exit();
}