<?php
include 'conexion.php';

$grupo = $_POST['nombre_grupo'];
$producto = $_POST['nombre_producto'];
$fecha = $_POST['fecha_alta'];
$kilos = $_POST['kilos'];
$precio = $_POST['precio_kilo'];
$vendedor = $_POST['nombre_vendedor'];

$total = $kilos * $precio;

$db->exec("
INSERT INTO ventas (
    nombre_grupo,
    nombre_producto,
    fecha_alta,
    kilos,
    nombre_vendedor,
    precio_kilo,
    monto_total
) VALUES (
    '$grupo',
    '$producto',
    '$fecha',
    $kilos,
    '$vendedor',
    $precio,
    $total
)
");

header("Location: index.php");