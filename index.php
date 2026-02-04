<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registro de Ventas</title>

<script>
function validar() {
    let campos = document.querySelectorAll("input");
    for (let c of campos) {
        if (c.value === "") {
            alert("Todos los campos son obligatorios");
            return false;
        }
    }
    if (document.getElementById("kilos").value <= 0) {
        alert("Los kilos deben ser mayores a 0");
        return false;
    }
    return true;
}
</script>
</head>

<body>
<h2>Registrar venta</h2>

<form action="guardar_venta.php" method="POST" onsubmit="return validar();">

    Nombre Grupo:<br>
    <input type="text" name="nombre_grupo"><br><br>

    Nombre Producto:<br>
    <input type="text" name="nombre_producto"><br><br>

    Fecha Alta:<br>
    <input type="date" name="fecha_alta"><br><br>

    Kilos:<br>
    <input type="number" step="0.01" name="kilos" id="kilos"><br><br>

    Precio por Kilo:<br>
    <input type="number" step="0.01" name="precio_kilo"><br><br>

    Nombre Vendedor:<br>
    <input type="text" name="nombre_vendedor"><br><br>

    <button type="submit">Guardar Venta</button>
</form>

<hr>

<h2>Ventas Registradas</h2>

<table border="1">
<tr>
    <th>Grupo</th>
    <th>Producto</th>
    <th>Fecha</th>
    <th>Kilos</th>
    <th>Vendedor</th>
    <th>Total</th>
</tr>

<?php
$result = $db->query("SELECT * FROM ventas");

while ($row = $result->fetchArray()) {
    echo "<tr>
        <td>{$row['nombre_grupo']}</td>
        <td>{$row['nombre_producto']}</td>
        <td>{$row['fecha_alta']}</td>
        <td>{$row['kilos']}</td>
        <td>{$row['nombre_vendedor']}</td>
        <td>{$row['monto_total']}</td>
    </tr>";
}
?>
</table>

</body>
</html>