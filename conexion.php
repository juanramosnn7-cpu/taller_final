<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$baseDatos = "educacion";

$conexion = new mysqli($servidor, $usuario, $password, $baseDatos);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

echo "Conexión exitosa";
?>