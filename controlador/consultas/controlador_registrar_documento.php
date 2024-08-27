<?php
	// $cont=0;
	// if ($_FILES["id_archivo"]['tmp_name']!="") {
    // $imagen=uniqid()."-".$_FILES['id_archivo']['name'];
	// $ruta1=$_FILES['id_archivo']['tmp_name'];
	// $destinoImagen='Archivo/'.$imagen;
	// copy($ruta1, $destinoImagen); 
	// $cont=1;
	// }else{  
	// $destinoImagen="";
	// }
	// $iddocumento= $_POST["iddocumento"];
	// $asunto     = strtoupper($_POST["asunto"]);
	// $idtipodocu = $_POST["idtipodocu"];
	// $idarea     = $_POST["idarea"];
	// $idremitente= $_POST["idremitente"];
	// $idusuario  = $_POST["idusuario"];
	// $opcion     = $_POST["opcion"];
	/*echo "<script>'alert($iddocumento)'</script>";
	echo "<script>'alert($asunto)'</script>";
	echo "<script>'alert($idtipodocu)'</script>";
	echo "<script>'alert($idarea)'</script>";
	echo "<script>'alert($idremitente)'</script>";
	echo "<script>'alert($idusuario)'</script>";
	echo "<script>'alert($opcion)'</script>";
	echo "<script>'alert($destinoImagen)'</script>";
	echo "<script>'alert($cont)'</script>";
	echo "<script>'alert($destinoImagen)'</script>";
	echo "<script>'alert($cont)'</script>";*/
	$id_diagnostico= $_POST["idDiagnostico"];
	$fecha= $_POST["txtfecharegistro"];
	$id_medico= $_POST["idMedico"];
	$id_paciente= $_POST["idPaciente"];
	$tratamiento= $_POST["txtTratamiento"];
	$costo= $_POST["txtCosto"];
	require '../../modelo/modelo_consultas.php';
	$MC = new Modelo_consulta();
	$consulta = $MC->Registrar_consulta($fecha, $id_medico, $id_paciente, $id_diagnostico, $tratamiento, $costo);
	echo $consulta;
?>