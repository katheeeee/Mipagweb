<?php
require __DIR__ . 'unidad2.practicas/vendor/autoload.php';
require 'Conexion.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

$sql = "SELECT id, nombre, edad, matricula, correo FROM alumnos";
$resultado = $mysqli->query($sql);

$excel = new Spreadsheet();
$hojaActiva = $excel->getActiveSheet();
$hojaActiva->setTitle("Alumnos");

// Medidas de las Celdas
$hojaActiva->getColumnDimension('B')->setWidth(40);
$hojaActiva->getColumnDimension('D')->setWidth(15);
$hojaActiva->getColumnDimension('E')->setWidth(40);

// Encabezado
$hojaActiva->setCellValue('A1', 'ID');
$hojaActiva->setCellValue('B1', 'Nombre');
$hojaActiva->setCellValue('C1', 'Edad');
$hojaActiva->setCellValue('D1', 'Matricula');
$hojaActiva->setCellValue('E1', 'Correo');

$fila = 2;

while ($contenido = $resultado->fetch_assoc()) {
    $hojaActiva->setCellValue('A' . $fila, $contenido['id']);
    $hojaActiva->setCellValue('B' . $fila, $contenido['nombre']);
    $hojaActiva->setCellValue('C' . $fila, $contenido['edad']);
    $hojaActiva->setCellValue('D' . $fila, $contenido['matricula']);
    $hojaActiva->setCellValue('E' . $fila, $contenido['correo']);
    $fila++;
}

// Muy importante: que NO haya ningún echo ni HTML antes
// Limpia cualquier cosa que se haya enviado por error
if (ob_get_length()) {
    ob_end_clean();
}

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Alumnos.xlsx"');
header('Cache-Control: max-age=5');

$writer = IOFactory::createWriter($excel, 'Xlsx');
$writer->save('php://output');
exit;
?>

