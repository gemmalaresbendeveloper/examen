<?php
	$nombre = strtoupper($_POST["nombre"]);
	$apePat = strtoupper($_POST["apepat"]);
	$apeMat = strtoupper($_POST["apemat"]);
	// $dni    = $_POST["txtcedula"];dni
	$dni    = $_POST["dni"];
	include '../../modelo/modelo_medicos.php';
	$MC = new Modelo_medicos();
	$nombre = $nombre ." ".$apePat." ".$apeMat;
	$consulta = $MC->Registrar_medico($nombre,$dni);
	echo $consulta;
?>