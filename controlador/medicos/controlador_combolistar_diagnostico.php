<?php
	include '../../modelo/modelo_medicos.php';
	$MC = new Modelo_medicos();
	$consulta = $MC->listar_combo_diagnosticos();
	echo json_encode($consulta);
?>