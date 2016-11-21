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

	<script type="text/javascript">
		$(function(){
			$('.extraInfos').on('shown.bs.collapse', function () {
				console.log($(this).data("info") + " i.indicator");
			    $("#" + $(this).data("info") + " i.indicator").removeClass("glyphicon-chevron-up").addClass("glyphicon-chevron-down");
			    $(this).parents("tr").removeClass("hidden");
			});
			$('.extraInfos').on('hidden.bs.collapse', function () {
				console.log($(this).data("info") + " i.indicator");
			    $("#" + $(this).data("info") + " i.indicator").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-up");
			    $(this).parents("tr").addClass("hidden");
			});
		})
	</script>
</head>
<body>
	<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
		<div class="navbar-header">
			 
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
			</button> <a class="navbar-brand" href="#">SI401</a>
		</div>
		
		<?php include "menu.php"; ?>
	</nav>
	<div class="container">
		<div class="row">
			<div>
				<h3>Consultar Paciente</h3>
				<div id="accordion" class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Nome completo</th>
								<th>Data de aniversário</th>
								<th>CPF</th>
								<th>Telefone</th>
								<th>E-mail</th>
								<th>Tipo sanguíneo</th>
								<th>Plano de saúde</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr id="basicInfos1" data-parent="#accordion" data-toggle="collapse" data-target="#extra1" aria-hidden="true">
								<td>John</td>
								<td>Doe</td>
								<td>Doe</td>
								<td>Doe</td>
								<td>Doe</td>
								<td>Doe</td>
								<td>Doe</td>
								<td>
									<i class="indicator glyphicon glyphicon-chevron-up pull-right"></i>
								</td>
							</tr>
							<tr class="hidden">
								<td colspan="8">
									<div id="extra1" data-info="basicInfos1" class="panel-group collapse extraInfos">
										<div class="panel panel-default">
											<div class="panel-heading">Alergias</div>
      										<div class="panel-body">
      											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eleifend ligula metus, quis porta nisl facilisis at. Curabitur cursus sem quis pharetra laoreet. Mauris eleifend rutrum dui, ac eleifend nisi pretium a. Nullam volutpat lorem at leo congue, lobortis suscipit neque ornare. Morbi auctor est erat, eget fermentum magna sodales ut. Pellentesque lobortis elit non leo luctus suscipit. Curabitur at feugiat eros, eu varius elit. Maecenas risus eros, euismod imperdiet justo ultricies, finibus tincidunt velit. In sollicitudin nisi at neque euismod, eu ornare nibh pellentesque. Donec nec odio vitae dolor imperdiet sagittis quis nec nibh. Sed nec nibh posuere sem lobortis sodales. Duis ac mi eu purus hendrerit vehicula. Mauris tempor risus sagittis, varius ante eu, lobortis elit.
      										</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading">Prontuario</div>
      										<div class="panel-body">
      											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eleifend ligula metus, quis porta nisl facilisis at. Curabitur cursus sem quis pharetra laoreet. Mauris eleifend rutrum dui, ac eleifend nisi pretium a. Nullam volutpat lorem at leo congue, lobortis suscipit neque ornare. Morbi auctor est erat, eget fermentum magna sodales ut. Pellentesque lobortis elit non leo luctus suscipit. Curabitur at feugiat eros, eu varius elit. Maecenas risus eros, euismod imperdiet justo ultricies, finibus tincidunt velit. In sollicitudin nisi at neque euismod, eu ornare nibh pellentesque. Donec nec odio vitae dolor imperdiet sagittis quis nec nibh. Sed nec nibh posuere sem lobortis sodales. Duis ac mi eu purus hendrerit vehicula. Mauris tempor risus sagittis, varius ante eu, lobortis elit.
      										</div>
										</div>
									</div>
								</td>
							</tr>
							<tr id="basicInfos2" data-parent="#accordion" data-toggle="collapse" data-target="#extra2" aria-hidden="true">
								<td>John</td>
								<td>Doe</td>
								<td>Doe</td>
								<td>Doe</td>
								<td>Doe</td>
								<td>Doe</td>
								<td>Doe</td>
								<td>
									<i class="indicator glyphicon glyphicon-chevron-up pull-right"></i>
								</td>
							</tr>
							<tr class="hidden">
								<td colspan="8">
									<div id="extra2" data-info="basicInfos2" class="panel-group collapse extraInfos">
										<div class="panel panel-default">
											<div class="panel-heading">Alergias</div>
      										<div class="panel-body">
      											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eleifend ligula metus, quis porta nisl facilisis at. Curabitur cursus sem quis pharetra laoreet. Mauris eleifend rutrum dui, ac eleifend nisi pretium a. Nullam volutpat lorem at leo congue, lobortis suscipit neque ornare. Morbi auctor est erat, eget fermentum magna sodales ut. Pellentesque lobortis elit non leo luctus suscipit. Curabitur at feugiat eros, eu varius elit. Maecenas risus eros, euismod imperdiet justo ultricies, finibus tincidunt velit. In sollicitudin nisi at neque euismod, eu ornare nibh pellentesque. Donec nec odio vitae dolor imperdiet sagittis quis nec nibh. Sed nec nibh posuere sem lobortis sodales. Duis ac mi eu purus hendrerit vehicula. Mauris tempor risus sagittis, varius ante eu, lobortis elit.
      										</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading">Prontuario</div>
      										<div class="panel-body">
      											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eleifend ligula metus, quis porta nisl facilisis at. Curabitur cursus sem quis pharetra laoreet. Mauris eleifend rutrum dui, ac eleifend nisi pretium a. Nullam volutpat lorem at leo congue, lobortis suscipit neque ornare. Morbi auctor est erat, eget fermentum magna sodales ut.
      										</div>
										</div>
									</div>
								</td>
							</tr>
							<tr id="basicInfos3" data-parent="#accordion" data-toggle="collapse" data-target="#extra3" aria-hidden="true">
								<td>John</td>
								<td>Doe</td>
								<td>Doe</td>
								<td>Doe</td>
								<td>Doe</td>
								<td>Doe</td>
								<td>Doe</td>
								<td>
									<i class="indicator glyphicon glyphicon-chevron-up pull-right"></i>
								</td>
							</tr>
							<tr class="hidden">
								<td colspan="8">
									<div id="extra3" data-info="basicInfos3" class="panel-group collapse extraInfos">
										<div class="panel panel-default">
											<div class="panel-heading">Alergias</div>
      										<div class="panel-body">
      											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eleifend ligula metus, quis porta nisl facilisis at. Curabitur cursus sem quis pharetra laoreet. Mauris eleifend rutrum dui, ac eleifend nisi pretium a. Nullam volutpat lorem at leo congue, lobortis suscipit neque ornare. Morbi auctor est erat, eget fermentum magna sodales ut. Pellentesque lobortis elit non leo luctus suscipit. Curabitur at feugiat eros, eu varius elit. Maecenas risus eros, euismod imperdiet justo ultricies, finibus tincidunt velit. In sollicitudin nisi at neque euismod, eu ornare nibh pellentesque. Donec nec odio vitae dolor imperdiet sagittis quis nec nibh. Sed nec nibh posuere sem lobortis sodales. Duis ac mi eu purus hendrerit vehicula. Mauris tempor risus sagittis, varius ante eu, lobortis elit.
      										</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading">Prontuario</div>
      										<div class="panel-body">
      											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eleifend ligula metus, quis porta nisl facilisis at. Curabitur cursus sem quis pharetra laoreet. Mauris eleifend rutrum dui, ac eleifend nisi pretium a. Nullam volutpat lorem at leo congue, lobortis suscipit neque ornare. Morbi auctor est erat, eget fermentum magna sodales ut. Pellentesque lobortis elit non leo luctus suscipit. Curabitur at feugiat eros, eu varius elit. Maecenas risus eros, euismod imperdiet justo ultricies, finibus tincidunt velit. In sollicitudin nisi at neque euismod, eu ornare nibh pellentesque. Donec nec odio vitae dolor imperdiet sagittis quis nec nibh. Sed nec nibh posuere sem lobortis sodales. Duis ac mi eu purus hendrerit vehicula. Mauris tempor risus sagittis, varius ante eu, lobortis elit.
      										</div>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>