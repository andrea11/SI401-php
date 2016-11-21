<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>SI401</title>

	<meta name="description" content="Source code generated using layoutit.com">
	<meta name="author" content="LayoutIt!">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php

if(!empty($_SESSION["usuario"])){
	 header('Location: list_patient.php');
}

// Se uma requisição post ocorreu, realizo o login
if($_SERVER["REQUEST_METHOD"] == "POST"){
	include "script_sgbd.php";

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	
	$error_msg = "";
	
	$result = mysqli_query($conn, "SELECT chefe FROM medico WHERE usuario = '$usuario' AND senha = '$senha'");
	if($result->num_rows == 0){
		$error_msg = "Combinação de usuário e senha inválida!";
	} else {	
		$_SESSION["usuario"] = $usuario;
		
		$row_result = mysqli_fetch_row($result);
		$_SESSION["chefe"] = $row_result[0];
		
		header('Location: list_patient.php');
	}
}

?>
	<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
		<div class="navbar-header">
			 
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
			</button> <a class="navbar-brand active" href="index.php">SI401</a>
		</div>
		
		<?php include "menu.php"; ?>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h3>Login</h3>
				<form role="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<div class="form-group">
					<?php 
					if(!empty($error_msg)){
						echo "<div class=\"alert alert-danger\">$error_msg</div>";
					}
					?>
						<label for="inputUsuario">
							Usuário
						</label>
						<input type="name" class="form-control" id="inputUsuario" name="usuario" required>
					</div>
					<div class="form-group">
						<label for="inputSenha">
							Senha
						</label>
						<input type="password" class="form-control" id="inputSenha" name="senha" required>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox"> Remember me
						</label>
					</div> 
					<button type="submit" class="btn btn-default">
						Sign in
					</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>