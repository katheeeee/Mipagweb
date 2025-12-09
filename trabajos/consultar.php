<?php
header('Content-Type: application/json');
$mysqli = new mysqli("127.0.0.1", "root", "TuClaveSegura123!", "ajaxbd");

if ($mysqli->connect_errno) {
    echo json_encode(["error" => $mysqli->connect_error]);
    exit();
}

$query = "SELECT * FROM alumnos";
$datos = [];

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $datos[] = [$row["id"], $row["nombre"], $row["apellidos"]];
    }
    $result->free();
}

echo json_encode($datos);
?>
