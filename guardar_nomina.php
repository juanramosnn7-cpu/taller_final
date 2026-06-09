<?php

include 'conexion.php';

$salario = $_POST['salario'];
$tipo_vinculacion = $_POST['tipo_vinculacion'];

$sql = "INSERT INTO nomina (salario, tipo_vinculacion) VALUES ('$salario', '$tipo_vinculacion')";

mysqli_query($conexion, $sql);

echo "<h2>Nomina guardada exitosamente</h2>";

echo "<a href='index.php'>Volver al inicio</a>";
?>