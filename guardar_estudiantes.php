<?php

include 'conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$tipo_id = $_POST['tipo_id'];
$programa = $_POST['programa'];
$semestre = $_POST['semestre'];
$edad = $_POST['edad'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];



$sql = "INSERT INTO estudiantes (nombre, apellido, tipo_id, programa, semestre, edad, fecha_nacimiento) VALUES ('$nombre', '$apellido', '$tipo_id', '$programa', '$semestre', '$edad', '$fecha_nacimiento')";

mysqli_query($conexion, $sql);

echo "<h2>Estudiante guardado exitosamente</h2>";

echo "<a href='index.php'>Volver al inicio</a>";
?>