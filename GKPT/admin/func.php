<?php
function check_login($connect){
	global $connect;
	if(isset($_SESSION['id_utilisateur']))
	{
	$id = $_SESSION['id_utilisateur'];
	$query = "select * from utilisateurs where id_utilisateur = '$id'limit 1";
	$result= mysqLi_query($connect, $query);
	if($result && mysqLi_num_rows ($result) > 0){
	
	$user_data = mysqli_fetch_assoc($result);
	return $user_data;
	}
	}
	//redirect to login
	header("Location: login.php");
	die;
	}