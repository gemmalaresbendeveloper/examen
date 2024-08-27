<?php
//°°°°°°°°°°°°°°°°°°°°°HOLA 1: DATOS DEL ALUMNO°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°

//ENCABEZADOSPRINCIPALES
$styleArrayDatosAlumno = array(
    'font'  => array(
      'bold'  => true,
        'color' => array('rgb' => '00C5FF'),
        'size'  => 11,
        'name'  => 'Arial Rounded MT Bold'
        ),
     'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER),
     'borders'=>array(
                    'allborders'=>array(
                        'style'=> PHPExcel_Style_Border::BORDER_THIN,
                        'color'=>array('argb' => '00C5FF')))
);

$styleArrayDatosPadre= array(
    'font'  => array(
      'bold'  => true,
        'color' => array('rgb' => '0E6408'),
        'size'  => 11,
        'name'  => 'Arial Rounded MT Bold'
        ),
     'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER),
     'borders'=>array(
                    'allborders'=>array(
                        'style'=> PHPExcel_Style_Border::BORDER_THIN,
                        'color'=>array('argb' => '0E6408')))
);

$styleArrayDatosMadre= array(
    'font'  => array(
      'bold'  => true,
        'color' => array('rgb' => 'C2008A'),
        'size'  => 11,
        'name'  => 'Arial Rounded MT Bold'
        ),
     'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER),
     'borders'=>array(
                    'allborders'=>array(
                        'style'=> PHPExcel_Style_Border::BORDER_THIN,
                        'color'=>array('argb' => 'C2008A')))
);
$styleArrayDatosTutor = array(
    'font'  => array(
      'bold'  => true,
        'color' => array('rgb' => 'C21A00'),
        'size'  => 11,
        'name'  => 'Arial Rounded MT Bold'
        ),
     'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER),
     'borders'=>array(
                    'allborders'=>array(
                        'style'=> PHPExcel_Style_Border::BORDER_THIN,
                        'color'=>array('argb' => 'C21A00')))
);

$styleArrayDatosAzulMarino= array(
    'font'  => array(
      'bold'  => true,
        'color' => array('rgb' => '084b8a'),
        'size'  => 11,
        'name'  => 'Arial Rounded MT Bold'
        ),
     'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER),
     'borders'=>array(
                    'allborders'=>array(
                        'style'=> PHPExcel_Style_Border::BORDER_THIN,
                        'color'=>array('argb' => '00C5FF')))
);
$styleArrayDatosVerde= array(
    'font'  => array(
      'bold'  => true,
        'color' => array('rgb' => '0E6408'),
        'size'  => 11,
        'name'  => 'Arial Rounded MT Bold'
        ),
     'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER),
     'borders'=>array(
                    'allborders'=>array(
                        'style'=> PHPExcel_Style_Border::BORDER_THIN,
                        'color'=>array('argb' => '0E6408')))
);

$styleArrayDatosRosa= array(
    'font'  => array(
      'bold'  => true,
        'color' => array('rgb' => 'C2008A'),
        'size'  => 10,
        'name'  => 'Arial Rounded MT Bold'
        ),
     'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER),
     'borders'=>array(
                    'allborders'=>array(
                        'style'=> PHPExcel_Style_Border::BORDER_THIN,
                        'color'=>array('argb' => 'C2008A')))
);
$styleArrayDatosAqua = array(
    'font'  => array(
      'bold'  => true,
        'color' => array('rgb' => '00AEEF'),//C21A00
        'size'  => 11,
        'name'  => 'Arial Rounded MT Bold'
        ),
     'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER),
     'borders'=>array(
                    'allborders'=>array(
                        'style'=> PHPExcel_Style_Border::BORDER_THIN,
                        'color'=>array('argb' => 'C21A00')))
);

$styleArray = array(
    'font' => array( 'name' => 'Arial','size' => 10),
     'borders'=>array(
                    'allborders'=>array(
                        'style'=> PHPExcel_Style_Border::BORDER_THIN,
                        'color'=>array('argb' => 'FFF')))
);

//ENCABEZADOSSECUDNARIOs---------------------
$styleArrayAzulMarino= array(
    'font'  => array(
        'bold'  => true,
        'color' => array('rgb' => '084b8a'),
        'size'  => 11,
        'name'  => 'Arial Rounded MT Bold'
    ));
$styleArrayVerde = array(
    'font'  => array(
        'bold'  => true,
        'color' => array('rgb' => '0E6408'),
        'size'  => 11,
        'name'  => 'Arial',
    ));
$styleArrayRosa = array(
    'font'  => array(
        'bold'  => true,
        'color' => array('rgb' => 'C2008A'),
        'size'  => 11,
        'name'  => 'Verdana'
    ));

$styleArrayGray = array(
    'font'  => array(
        'bold'  => true,
        'color' => array('rgb' => '272323'),
        'size'  => 9,
        'name'  => 'Verdana'
    ));
$styleArrayAqua = array(
    'font'  => array(
        'bold'  => true,
        'color' => array('rgb' => '00AEEF'),
        'size'  => 11,
        'name'  => 'Verdana'
    ));
    


$styleArray = array(
    'font' => array( 'name' => 'Arial','size' => 10),
     'borders'=>array(
                    'allborders'=>array(
                        'style'=> PHPExcel_Style_Border::BORDER_THIN,
                        'color'=>array('argb' => 'FFF')))
);

//ENCABEZADOSSECUDNARIOs---------------------
$styleArrayAlumno = array(
    'font'  => array(
        'bold'  => true,
        'color' => array('rgb' => '00C5FF'),
        'size'  => 11,
        'name'  => 'Arial Rounded MT Bold'
    ));
$styleArrayPadre = array(
    'font'  => array(
        'bold'  => true,
        'color' => array('rgb' => '0E6408'),
        'size'  => 11,
        'name'  => 'Verdana'
    ));
$styleArrayMadre = array(
    'font'  => array(
        'bold'  => true,
        'color' => array('rgb' => 'C2008A'),
        'size'  => 11,
        'name'  => 'Verdana'
    ));
$styleArrayTutor = array(
    'font'  => array(
        'bold'  => true,
        'color' => array('rgb' => 'C21A00'),
        'size'  => 11,
        'name'  => 'Verdana'
    ));
    ?>