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
	<link href="bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
	<script src="bootstrap-datepicker/locales/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>
	<script type="text/javascript">$(function() {
		    $('#inputData').datepicker({
				autoclose: true,
				startDate: "01-01-1900",
				endDate: "31-12-2016",
			    todayBtn: "linked",
			    language: "pt-BR",
			    todayHighlight: true
			});
		});
	</script>
</head>
<body>
<?php
// Se uma requisição post ocorreu, realizo o cadastro
if($_SERVER["REQUEST_METHOD"] == "POST"){
	include "script_sgbd.php";
	
	$nome = $_POST['nome'];
	$data_aniversario = !empty($_POST['data_aniversario']) ? $_POST['data_aniversario'] : "";
	$cpf = $_POST['cpf'];
	$telefone = !empty($_POST['telefone']) ? $_POST['telefone'] : "";
	$email = !empty($_POST['email']) ? $_POST['email'] : "";
	$tipo_sanguineo = $_POST['tipo_sanguineo'];
	$plano_saude = $_POST['plano_saude'];
	$alergias = !empty($_POST['alergias']) ? $_POST['alergias'] : "";
	$prontuario = !empty($_POST['prontuario']) ? $_POST['prontuario'] : "";
	
	$result = mysqli_query($conn, "SELECT 0 FROM paciente WHERE cpf = $cpf");
	
	// Cadastro de novo paciente
	if($result->num_rows == 0){
		if(mysqli_query($conn, "INSERT INTO paciente VALUES 
		($cpf, '$nome', '$telefone', '$email', '$tipo_sanguineo', '$plano_saude', '$alergias', '$prontuario')")){
			
			$msg = "<div class=\"alert alert-success\">Paciente inserido com sucesso!</div>";
		}
	}
	// Atualizando paciente existente
	else {
		if(mysqli_query($conn, "UPDATE paciente SET
		nome = '$nome', telefone = '$telefone', email = '$email', tiposanguineo = '$tipo_sanguineo',
		planosaude = '$plano_saude', alergias = '$alergias', prontuario = '$prontuario'
		WHERE cpf = $cpf;")){
			
			$msg = "<div class=\"alert alert-success\">Paciente atualizado com sucesso!</div>";
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
				<h3>Cadastrar Paciente</h3>
				<form role="form-horizontal" id="form_padrao" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
						<label for="inputData">
							Data de aniversário
						</label>
						<input type="text" class="form-control" id="inputData" name="data_aniversario">
					</div>
					<div class="form-group">
						<label for="inputCPF">
							CPF
						</label>
						<input type="number" class="form-control" id="inputCPF" name="cpf" required>
					</div>
					<div class="form-group">
						<label for="inputTelefone">
							Telefone
						</label>
						<input type="text" class="form-control" id="inputTelefone" name="telefone">
					</div>
					<div class="form-group">
						<label for="inputEmail">
							E-mail
						</label>
						<input type="email" class="form-control" id="inputEmail" maxlength="40" name="email">
					</div>
					<div class="form-group">
						<label for="inputTS">
							Tipo sanguíneo
						</label>
						<input type="text" class="form-control" id="inputTS" maxlength="3" name="tipo_sanguineo" required>
					</div>
					<div class="form-group">
						<label for="inputPdS">
							Plano de saúde
						</label>
						<input type="text" class="form-control" id="inputPdS" maxlength="30" name="plano_saude" required>
					</div>
					<div class="form-group">
						<label for="inputAlergias">
							Alergias
						</label>
						<input type="text" class="form-control" id="inputAlergias" maxlength="100" name="alergias">
					</div>
					<div class="form-group">
						<label for="inputProntuario">Prontuário</label>
						<textarea form="form_padrao" class="form-control" rows="5" id="inputProntuario" name="prontuario"></textarea>
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