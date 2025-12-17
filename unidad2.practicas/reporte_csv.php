<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

$spreadsheet = new Spreadsheet();
$spreadsheet->getProperties()
    ->setCreator("Jefer Apaza")
    ->setTitle("Reporte en CSV");

$hojaActiva = $spreadsheet->getActiveSheet();
$hojaActiva->setCellValue('A1', 'Codigos de Programacion');
$hojaActiva->setCellValue('B2', 15.264);
$hojaActiva->setCellValue('C1', 'Hernan Apaza')
           ->setCellValue('D1', 'cdp');
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment;filename="reporte_simple.csv"');
header('Cache-Control: max-age=0');
$writer = IOFactory::createWriter($spreadsheet, 'Csv');
$writer->setDelimiter(';');
$writer->save('php://output');
exit;
?>

