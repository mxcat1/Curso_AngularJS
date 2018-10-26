<?php
/**
 * Created by PhpStorm.
 * User: Mxcat_LAP
 * Date: 26/10/2018
 * Time: 10:19
 */
require_once "../modelos/productos.php";
require_once "../libs/psdExcel/autoload.php";
$productos= new productos();
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Border;

$l_pro=$productos->mostrar_productos();

$hoja=new Spreadsheet();
$lista=['N°','Articulo','Descripcion'];
$cabecera=$hoja->getActiveSheet()->fromArray($lista,null,'C12');
$styleArray = array(
                'borders' => array(
                                'allborders' => array(
                                    'style' => Border::BORDER_MEDIUM,
                                    'color' => array('argb' => 'FFCA4B4B'),
                                ),
                ),
);
$hoja->getActiveSheet()->getStyle('C12:E12')->applyFromArray($styleArray);
$linea=$hoja->getActiveSheet()->fromArray($l_pro,null,'C13');
$writer = new Xlsx($hoja);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Transfer-Encoding: binary');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Disposition: attachment; filename=Reporte_Productos.xlsx' );
$writer->save('php://output');