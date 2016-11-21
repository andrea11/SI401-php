<?php
@session_start();

echo '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">';

if(!empty($_SESSION['usuario'])){
	
	$uri = $_SERVER['REQUEST_URI'];
	
	echo '<li ' . (strpos($uri, "list_patient.php") !== false ? 'class="active"' : '') . '>
					<a href="list_patient.php" class="">Consultar Paciente</a>
		  </li>
		  <li ' . (strpos($uri, "register_patient.php") !== false ? 'class="active"' : '') . '>
					<a href="register_patient.php" class="">' . ($_SESSION['chefe'] == 0 ? "Atualizar Prontuário" : "Cadastrar Paciente") . '</a>
		  </li>';
		  
	if(!empty($_SESSION['chefe']) && $_SESSION['chefe'] == 1){
		echo 	'<li ' . (strpos($uri, "register_doctor.php") !== false ? 'class="active"' : '') . '>
					<a href="register_doctor.php" class="">Cadastrar Medico</a>
				</li>';
	}
	
	echo '		<li>
					<a href="logout.php" class="">Logout</a>
				</li>';
}
				
echo '		</ul>
		</div>';

?>