<?php
//session_start();
//header('Content-Type: application/json; charset=utf-8');

include '../../modelo/modelo_consultas.php';
date_default_timezone_set('UTC');
date_default_timezone_set("America/Mexico_City");
$date=date('Y').'-'.date("m").'-'.date("d");
$consultas = new Modelo_consulta();

// $uniforme= new Uniforme();
$valor='';
$consultas = $consultas->listar_consultas_reporte();     
 

print_r($consultas);
// $uniforme = $uniforme->ventaUniforme($SeccionID,$inicio_corte,$fin_corte);       
//echo $row =  $uniforme->fetch(PDO::FETCH_ASSOC);
//var_dump($row);

// $rowCount=$consultas->rowCount(); //rowCount();
// $utilidad="";
//       $column_fecha= "";
// 	  $column_concepto= ""; 
// 	  $column_precio_unitario= "";
// 	  $column_iva="";
// 	  $column_precio_total="";
// 	  $column_precio_venta="";
// 	  $column_cantidad="";
// 	   $column_total="";
// $total = 0;
// $granTotal=0;



//   while($row =  $uniforme->fetch(PDO::FETCH_ASSOC)){
	while($row =  $consultas->fetch(PDO::FETCH_ASSOC)){
$fecha=$row['fecha'];
$concepto=substr($row["concepto"],0,20);
$precio_unitario=$row['buy_price']; //    $price_to_show = number_format($row["Price"],',','.','.');

$iva=$precio_unitario*0.16;
$cantidad=$row['sum_cantidad'];
$precio_total=($precio_unitario+$iva)*$cantidad;
	  
$precio_venta=$row['costo'];	   	  
$total= $row['sum_totalimporte'];  
$utilidadUnitaria=$total-$precio_total; 
$granTotal+= $row['sum_totalimporte'];

     $utilidad.=$utilidadUnitaria;
	  
	  $column_fecha=  $column_fecha.$fecha."\n";
	  $column_concepto= $column_concepto.$concepto."\n"; 
	  $column_precio_unitario= $column_precio_unitario.$precio_unitario."\n";
	  $column_iva=$column_iva.$iva."\n";
	  $column_precio_total=$column_precio_total.$precio_total."\n";
	  $column_precio_venta=$column_precio_venta.$precio_venta."\n";
	  $column_cantidad=$column_cantidad.$cantidad."\n";
	   $column_total=$column_total.$total."\n";
     } 



$total = number_format($total,',','.','.');


   include_once('../_recursos/fpdf/fpdf.php');
//Create a new PDF file
$pdf=new FPDF();
$pdf->AddPage();

//Fields Name position
$Y_Fields_Name_position = 20;
//Table position, under Fields Name
$Y_Table_Position = 26;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(232,232,232);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',12);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(10);
$pdf->Cell(20,6,'FECHA',1,0,'L',1);
$pdf->SetX(30);
$pdf->Cell(50,6,'CONCEPTO',1,0,'L',1);
$pdf->SetX(80);
$pdf->Cell(20,6,'P.UNITARIO',1,0,'R',1);
$pdf->SetX(100);
$pdf->Cell(10,6,'IVA',1,0,'R',1);

$pdf->SetX(123);
$pdf->Cell(20,6,'PRECIO.TOTAL',1,0,'R',1);
$pdf->SetX(150);
$pdf->Cell(20,6,'PRECIO.VENTA',1,0,'R',1);
$pdf->Ln();

$pdf->SetFont('Arial','',12);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(45);
$pdf->MultiCell(20,6,$column_fecha,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(65);
$pdf->MultiCell(100,6,$column_concepto,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(135);
$pdf->MultiCell(30,6,$column_precio_unitario,1,'R');
$pdf->SetX(135);
$pdf->MultiCell(30,6,'$ '.$total,1,'R');

$pdf->Output();

// $pdf->Output(); //Salida al navegador


?>
