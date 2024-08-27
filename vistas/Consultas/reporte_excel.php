<?php 
require_once '../_recursos/PHPExcel/excel.php';

activeErrorReporting();
noCli();

require_once '../_recursos/PHPExcel/PHPExcel.php';
require_once '../_recursos/PHPExcel/includeColorsExcel.php';

require_once('../../modelo/modelo_conexion.php');
$conexion = new conexion();
$conexion->conectar();
$query = "SELECT consulta.id_consulta, consulta.tratamiento, consulta.fecha,consulta.costo, 
						medicos.nombre as medico, medicos.cedula,
						pacientes.nombre as paciente, pacientes.curp,
	                    diagnosticos.nombre as diagnostico
						FROM consulta
						INNER JOIN medicos ON consulta.id_medico = medicos.id_medico
						INNER JOIN pacientes ON consulta.id_paciente = pacientes.id_paciente
						INNER JOIN diagnosticos ON consulta.id_diagnostico = diagnosticos.id_diagnostico";

$informe = $conexion->conexion->query($query);

// print_r($informe);
$objPHPExcel = new PHPExcel();

$objPHPExcel->getProperties()->setCreator("Developero")
               ->setLastModifiedBy("Maarten Balliauw")
               ->setTitle("Office 2007 XLSX Test Document")
               ->setSubject("Office 2007 XLSX Test Document")
               ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
               ->setKeywords("office 2007 openxml php")
               ->setCategory("Test result file");

// $objPHPExcel->getActiveSheet()->mergeCells('A1:F1');

// $objPHPExcel->getActiveSheet()->getStyle('A1:F1')->applyFromArray($styleArrayDatosAzulMarino);

// $objPHPExcel->getActiveSheet()->getStyle('A2:P2')->applyFromArray($styleArrayRosa);//styleArrayVerde
	
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'ID')
            ->setCellValue('A2', 'PACIENTE')
            ->setCellValue('B2', 'MEDICO')
            ->setCellValue('C2', 'DIAGNOSTICO')
            ->setCellValue('D2', 'TRATAMIENTO')
            ->setCellValue('E2', 'COSTO');


$i = 3;
while($row = $informe->fetch_assoc())
{
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue("A$i", $row['id_consulta'])
            ->setCellValue("B$i", $row['paciente'])
            ->setCellValue("C$i", $row['medico']) 
            ->setCellValue("D$i", $row['diagnostico'])
            ->setCellValue("E$i", $row['tratamiento'])
            ->setCellValue("F$i", $row['costo']);
$i++;
}

$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);

$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setTitle('Consultas');

$objPHPExcel->setActiveSheetIndex(0);


getHeaders();
header('Content-Disposition: attachment;filename="Consultas.xlsx"');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
ob_end_clean();
$objWriter->save('php://output');
exit;

?>