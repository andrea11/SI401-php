<?php
$servername = "localhost";
$username = "root";
$password = "";

// Não alterar
$database = "si401a_grupo03";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Verifica a necessidade de criação de uma Database

$verificacao_db = mysqli_query($conn, "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$database'");
if($verificacao_db->num_rows == 0){
	
	// Sem a base criada, devemos cria-la então
	$createDB = "CREATE DATABASE $database";
	if (!mysqli_query($conn, $createDB)) {
		echo "Falha ao criar base de dados: " . mysqli_error($conn);
		return;
	}
	
	mysqli_select_db($conn, $database);
	
	$create_paciente = "CREATE TABLE paciente (
							cpf int PRIMARY KEY,
							nome varchar(50) NOT NULL,
							telefone varchar(20),
							email varchar(40),
							tiposanguineo varchar(3) NOT NULL,
							planosaude varchar(30) NOT NULL,
							alergias varchar(100),
							prontuario text
						);";
						
	if(!mysqli_query($conn, $create_paciente)){
		echo "Falha ao criar tabela de paciente: " . mysqli_error($conn);
		return;
	}
						
	$create_medico = "CREATE TABLE medico (
						cpf int NOT NULL,
						nome varchar(50) NOT NULL,
						usuario varchar(20) PRIMARY KEY,
						senha varchar(20) NOT NULL,
						chefe boolean NOT NULL
					);";
					
	if(!mysqli_query($conn, $create_medico)){
		echo "Falha ao criar tabela de medico: " . mysqli_error($conn);
		return;
	}
					
	$insert_enfermeiro_chefe = "INSERT INTO medico VALUES (0, 'Enfermeiro-Chefe', 'admin', 'admin', true);";
	
	if(!mysqli_query($conn, $insert_enfermeiro_chefe)){
		echo "Falha ao inserir usuario admin: " . mysqli_error($conn);
		return;
	}
	
	echo "Base de dados criada com sucesso!";
	
	mysqli_close($conn);
} else {
	mysqli_select_db($conn, $database);
}
?>
