<?php
	include '../../modelo/modelo_pacientes.php';
	$MC = new Modelo_pacientes();
	$consulta = $MC->listar_combo_pacientes();
	echo json_encode($consulta);
?>