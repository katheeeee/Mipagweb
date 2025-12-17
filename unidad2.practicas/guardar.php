<?php
session_start();

$fecha = $_POST['fecha'];
$total = $_POST['total'];

$_SESSION['ventas'][] = [
    'fecha' => $fecha,
    'total' => $total
];

header("Location: formulario.php");
exit;
