<?php
require "Conexion.php";

// compatibilidad FPDF con PHP 8
if (!function_exists('get_magic_quotes_runtime')) {
    function get_magic_quotes_runtime() {
        return 0;
    }
}

require __DIR__ . "/fpdf/fpdf.php";

// Generamos una consulta que llame a los registros de la BD
$sql = "SELECT id, nombre, edad, matricula, correo FROM alumnos";
$resultado = $mysqli->query($sql);

$pdf = new FPDF("P", "mm", "Letter");
$pdf->AddPage();
$pdf->SetFont("Arial", "B", 12);

// Título
$pdf->Cell(190, 5, "Reporte de Alumnos", 0, 1, "C");

// Encabezados de la tabla
$pdf->Cell(10, 6, "ID", 1, 0, "C");
$pdf->Cell(70, 6, "Nombre", 1, 0, "C");
$pdf->Cell(20, 6, "Edad", 1, 0, "C");
$pdf->Cell(35, 6, "Matricula", 1, 0, "C");
$pdf->Cell(60, 6, "Correo", 1, 1, "C");

// Cuerpo de la tabla
$pdf->SetFont("Arial", "", 12);

while ($fila = $resultado->fetch_assoc()) {
    $pdf->Cell(10, 6, $fila['id'], 1, 0, "C");
    $pdf->Cell(70, 6, $fila['nombre'], 1, 0, "");
    $pdf->Cell(20, 6, $fila['edad'], 1, 0, "C");
    $pdf->Cell(35, 6, $fila['matricula'], 1, 0, "C");
    $pdf->Cell(60, 6, $fila['correo'], 1, 1, "C");
}

$pdf->Output();
?>
