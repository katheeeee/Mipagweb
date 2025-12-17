<?php
session_start();

if (!isset($_SESSION['ventas'])) {
    $_SESSION['ventas'] = [];
}
?>

<h2>Registro de ventas</h2>

<form method="POST" action="guardar.php">
  <label>Fecha:</label>
  <input type="date" name="fecha" required><br><br>

  <label>Monto de venta:</label>
  <input type="number" name="total" step="0.01" required><br><br>

  <button type="submit">Registrar venta</button>
</form>

<br>
<a href="reporte.php">Ver reporte de ventas</a>
