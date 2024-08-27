<?php
	$curp = $_POST["curp"];
	require '../../modelo/modelo_pacientes.php';
	$MC = new Modelo_pacientes();
	$consulta = $MC->buscar_paciente($curp);
	$data = json_encode($consulta);
	echo $data;
?>