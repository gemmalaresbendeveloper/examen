<?php
	class Modelo_consulta
	{
		private $conexion;
		function __construct()
		{
			require_once('modelo_conexion.php');
			$this->conexion = new conexion();
			$this->conexion->conectar();
		}
		// function listar_codigodocumento(){
		// 		$sql = "select COUNT(*) from documento";
		// 		$arreglo = array();
		// 		if ($consulta = $this->conexion->conexion->query($sql)) {

		// 			while ($consulta_VU = mysqli_fetch_array($consulta)) {
		// 				$arreglo[] = $consulta_VU;
		// 			}
		// 			return $arreglo;
		// 			$this->conexion->cerrar();	
		// 		}
		// }
		function Registrar_consulta($fecha, $id_medico, $id_paciente, $id_diagnostico, $tratamiento, $costo){
			$sql = "call PA_REGISTRARCONSULTA('$fecha', '$id_medico', '$id_paciente', '$id_diagnostico', '$tratamiento', '$costo')";
			if ($resultado = $this->conexion->conexion->query($sql)){
				return 1;
			}
			else{
				return 0;
			}
			$this->conexion->Cerrar_Conexion();
		}

		 function listar_consultas($valor, $inicio=FALSE,$limite=FALSE){
			if ($inicio!==FALSE && $limite!==FALSE) {
			    $sql = "SELECT consulta.id_consulta, consulta.tratamiento, consulta.fecha,consulta.costo,medicos.nombre as medico, medicos.cedula,pacientes.nombre as paciente, pacientes.curp,diagnosticos.nombre FROM consulta INNER JOIN medicos ON consulta.id_medico = medicos.id_medico INNER JOIN pacientes ON consulta.id_paciente = pacientes.id_paciente
INNER JOIN diagnosticos ON consulta.id_diagnostico = diagnosticos.id_diagnostico
						WHERE pacientes.nombre
						LIKE '".$valor."%' ORDER BY consulta.id_consulta DESC LIMIT $inicio,$limite";
			}else{
			    $sql = "SELECT consulta.id_consulta, consulta.tratamiento, consulta.fecha,consulta.costo, 
						medicos.nombre as medico, medicos.cedula,
						pacientes.nombre as paciente, pacientes.curp,
	                    diagnosticos.nombre
						FROM consulta
						INNER JOIN medicos ON consulta.id_medico = medicos.id_medico
						INNER JOIN pacientes ON consulta.id_paciente = pacientes.id_paciente
						INNER JOIN diagnosticos ON consulta.id_diagnostico = diagnosticos.id_diagnostico
						WHERE pacientes.nombre
						LIKE '".$valor."%' ORDER BY consulta.id_consulta DESC";
			}
			$resultado =  $this->conexion->conexion->query($sql);
			$arreglo = array();
			while($consulta_VU=mysqli_fetch_array($resultado)){ ///MYSQL_BOTH, MYSQL_ASSOC, MYSQL_NUM
			    $arreglo[] = $consulta_VU;
			}
			return $arreglo;
			$this->conexion->cerrar();	
 		}

		 function listar_consultas_por_dia($valor, $inicio=FALSE,$limite=FALSE){
			if ($inicio!==FALSE && $limite!==FALSE) {
			    $sql = "SELECT * FROM `consultas_por_dia`";
			}else{
			    $sql = "SELECT * FROM `consultas_por_dia`";
			}
			$resultado =  $this->conexion->conexion->query($sql);
			$arreglo = array();
			while($consulta_VU=mysqli_fetch_array($resultado)){ ///MYSQL_BOTH, MYSQL_ASSOC, MYSQL_NUM
			    $arreglo[] = $consulta_VU;
			}
			return $arreglo;
			$this->conexion->cerrar();	
 		}

		 function listar_consultas_reporte(){
	
			    $sql = "SELECT consulta.id_consulta, consulta.tratamiento, consulta.fecha,consulta.costo, 
						medicos.nombre as medico, medicos.cedula,
						pacientes.nombre as paciente, pacientes.curp,
	                    diagnosticos.nombre
						FROM consulta
						INNER JOIN medicos ON consulta.id_medico = medicos.id_medico
						INNER JOIN pacientes ON consulta.id_paciente = pacientes.id_paciente
						INNER JOIN diagnosticos ON consulta.id_diagnostico = diagnosticos.id_diagnostico";
			
			$resultado =  $this->conexion->conexion->query($sql);
			// $arreglo = array();
			// while($consulta_VU=mysqli_fetch_array($resultado)){ ///MYSQL_BOTH, MYSQL_ASSOC, MYSQL_NUM
			//     $arreglo[] = $consulta_VU;
			// }
			return $resultado;
			$this->conexion->cerrar();	
 		}
	}
?>