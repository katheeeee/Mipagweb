<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!function_exists('get_magic_quotes_runtime')) {
    function get_magic_quotes_runtime() {
        return 0;
    }
}

require __DIR__ . '/fpdf/fpdf.php';

$pdf = new FPDF("P", "mm", "Letter");
$pdf->AddPage();
$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(100, 5, "Mi reporte en PDF", 1, 0, "C");
$pdf->Output();
?>




