<?php
include "request_login.php";
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
// Se uma requisição post ocorreu, realizo o cadastro
if($_SERVER["REQUEST_METHOD"] == "POST"){
	include "script_sgbd.php";
	
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	
	$result = mysqli_query($conn, "SELECT 0 FROM medico WHERE usuario = '$usuario' OR cpf = $cpf");
	
	if($result->num_rows > 0){
		$msg = "<div class=\"alert alert-danger\">Já existe um médico com esse Usuário ou CPF!</div>";
	} else {
		// Cadastro de novo Médico
		if(mysqli_query($conn, "INSERT INTO medico VALUES ($cpf, '$nome', '$usuario', '$senha', false)")){
			$msg = "<div class=\"alert alert-success\">Médico inserido com sucesso!</div>";
		}
	}
}
?>
	<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
		<div class="navbar-header">
			 
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
			</button> <a class="navbar-brand" href="index.php">SI401</a>
		</div>
		
		<?php include "menu.php"; ?>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h3>Cadastrar Medico</h3>
				<form role="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<div class="form-group">
					<?php 
					if(!empty($msg)){
						echo "$msg";
					}
					?>
						<label for="inputNome">
							Nome completo
						</label>
						<input type="text" class="form-control" id="inputNome" maxlength="50" name="nome" required>
					</div>
					<div class="form-group">
						<label for="inputCPF">
							CPF
						</label>
						<input type="text" class="form-control" id="inputCPF" name="cpf" required>
					</div>
					<div class="form-group">
						<label for="inputUsuario">
							Usuário
						</label>
						<input type="name" class="form-control" id="inputUsuario" maxlength="20" name="usuario" required>
					</div>
					<div class="form-group">
						<label for="inputPassword1">
							Senha
						</label>
						<input type="password" class="form-control" id="inputPassword" maxlength="20" name="senha" required>
					</div>
					<button type="submit" class="btn btn-default">
						Cadastrar
					</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>