<?php
// Mostrar errores durante el desarrollo
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Llamar al autoload de Composer (correcto para AWS)
require __DIR__ . '/vendor/autoload.php';

// Estamos referenciando para llamar el script "Spreadsheet"
use PhpOffice\PhpSpreadsheet\Spreadsheet;
// IOFactory es la clase para poder descargar como Xlsx o Csv
use PhpOffice\PhpSpreadsheet\IOFactory;

// Declaramos un objeto con la instancia Spreadsheet
$spreadsheet = new Spreadsheet();

// Declaramos propiedades de la hoja de cálculo
$spreadsheet->getProperties()
    ->setCreator("Anonimo")
    ->setTitle("Reporte en Excel");

// Aquí establecemos la posición en la que se va a trabajar (hoja 0)
$spreadsheet->setActiveSheetIndex(0);

// Aquí declaramos la hoja en la que vamos a trabajar
$hojaActiva = $spreadsheet->getActiveSheet();

// Cambiar la fuente y tamaño
$spreadsheet->getDefaultStyle()->getFont()->setName('Arial');
$spreadsheet->getDefaultStyle()->getFont()->setSize(15);

// Ajuste del ancho de columnas
$hojaActiva->getColumnDimension('A')->setWidth(40);
$hojaActiva->getColumnDimension('C')->setWidth(20);

// Llenando celdas
$hojaActiva->setCellValue('A1', 'Codigos de Programacion');
$hojaActiva->setCellValue('B2', 15.264);

// Otra forma de rellenar varias celdas seguidas
$hojaActiva->setCellValue('C1', 'Hernan Apaza')
           ->setCellValue('D1', 'cdp');

// Encabezados para descargar archivo Excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Reporte_en_excel.xlsx"');
header('Cache-Control: max-age=0');

// Crear y enviar archivo Excel
$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');
exit;
?>
