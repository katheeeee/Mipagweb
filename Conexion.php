<?php
$mysqli = new mysqli("localhost", "root", "TuClaveSegura123!", "estudiantes");

if ($mysqli->connect_errno) {
    echo "Error de conexión: " . $mysqli->connect_error;
    exit;
}
?>
