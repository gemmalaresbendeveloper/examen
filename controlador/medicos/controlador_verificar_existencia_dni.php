<?php
	$dni = $_POST["dni"];
	require '../../modelo/modelo_medicos.php';
	$MC = new Modelo_medicos();
	$consulta = $MC->buscar_medico($dni);
	$data = json_encode($consulta);
	echo $data;
?>