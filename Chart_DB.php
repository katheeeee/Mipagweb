<?php require 'Conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Charts</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body>
<h1>Reportes con chart.js con Base de Datos</h1>

<canvas id="myChart" style="width:100%;max-width:700px"></canvas>

<script>
var xValues = [
<?php
$sql = "SELECT * FROM alumnos";
$result = $mysqli->query($sql);
while ($registros = $result->fetch_assoc()) {
?>
    '<?php echo $registros["nombre"] ?>',
<?php } ?>
];

var yValues = [9, 8, 6, 9, 7, 10, 0];
var barColors = ["red", "green", "blue", "orange", "black"];

new Chart("myChart", {
    type: "bar",
    data: {
        labels: xValues,
        datasets: [{
            backgroundColor: barColors,
            data: yValues
        }]
    },
    options: {
        legend: { display: true },
        title: {
            display: true,
            text: "Asistencia de Estudiantes de ING Sistemas"
        }
    }
});
</script>

</body>
</html>
