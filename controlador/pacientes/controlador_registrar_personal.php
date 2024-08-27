<?php
	$nombre = strtoupper($_POST["nombre"]);
	$apePat = strtoupper($_POST["apepat"]);
	$apeMat = strtoupper($_POST["apemat"]);
	$curp    = $_POST["curp"];
	include '../../modelo/modelo_pacientes.php';
	$MC = new Modelo_pacientes();
	$nombre = $nombre ." ".$apePat." ".$apeMat;
	$consulta = $MC->Registrar_paciente($nombre,$curp);
	echo $consulta;
?>