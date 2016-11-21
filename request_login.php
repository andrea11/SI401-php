<?php
session_start();

if(empty($_SESSION["usuario"])){
  header("Location: index.php");
} else {
	
	// Garanto que as páginas que não podem ser acessadas por usuários não Chefes não sejam acessadas
	$uri = $_SERVER['REQUEST_URI'];
	
	if($_SESSION['chefe'] != 1){
		if(strpos($uri, "register_patient.php") !== false
		|| strpos($uri, "register_doctor.php") !== false){
			
			header("Location: list_patient.php");
		}
	}
}
?>