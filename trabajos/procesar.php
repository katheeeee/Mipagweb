<?php
$cnx = mysqli_connect("127.0.0.1", "root", "TuClaveSegura123!", "ajaxbd");

if (!$cnx) {
    die("Error de conexion: " . mysqli_connect_error());
}

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];

if (!empty($nombres) && !empty($apellidos)) {
    $nombres = mysqli_real_escape_string($cnx, $nombres);
    $apellidos = mysqli_real_escape_string($cnx, $apellidos);
    mysqli_query($cnx, "INSERT INTO alumnos (nombre, apellidos) VALUES ('$nombres','$apellidos')");
    echo "Guardado con exito";
} else {
    echo "Faltan datos en el formulario (nombres o apellidos)";
}

mysqli_close($cnx);
?>
