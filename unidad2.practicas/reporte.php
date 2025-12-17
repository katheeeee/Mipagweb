<?php
session_start();

$ventas = $_SESSION['ventas'] ?? [];

$totales = array_column($ventas, 'total');

$total_general = array_sum($totales);
$promedio = count($totales) > 0 ? $total_general / count($totales) : 0;
$maximo = count($totales) > 0 ? max($totales) : 0;
$minimo = count($totales) > 0 ? min($totales) : 0;
?>

<h2>Reporte de ventas registradas</h2>

<table border="1" cellpadding="5">
  <tr>
    <th>#</th>
    <th>Fecha</th>
    <th>Monto</th>
  </tr>

<?php foreach ($ventas as $i => $v): ?>
  <tr>
    <td><?= $i + 1 ?></td>
    <td><?= $v['fecha'] ?></td>
    <td>S/ <?= number_format($v['total'], 2) ?></td>
  </tr>
<?php endforeach; ?>
</table>

<br>

<h3>Resumen</h3>
<ul>
  <li>Total general: S/ <?= number_format($total_general, 2) ?></li>
  <li>Promedio de ventas: S/ <?= number_format($promedio, 2) ?></li>
  <li>Venta mayor: S/ <?= number_format($maximo, 2) ?></li>
  <li>Venta menor: S/ <?= number_format($minimo, 2) ?></li>
</ul>

<a href="formulario.php">Volver</a>
