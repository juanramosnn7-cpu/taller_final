<?php
    include 'conexion.php';

    $sql = "SELECT * FROM profesor";
    $result = $conexion->query($sql);
    
echo "<a href='index.php'>Volver al inicio</a>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Consultar Estudiantes</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Listado de Profesores</h1>
    <table class="tabla">

    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Tipo ID</th>
        <th>Programa</th>
        <th>Semestre</th>
        <th>Edad</th>
        <th>Fecha Nacimiento</th>
    </tr>
    <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nombre"] . "</td>";
                echo "<td>" . $row["apellido"] . "</td>";
                echo "<td>" . $row["tipo_id"] . "</td>";
                echo "<td>" . $row["programa"] . "</td>";
                echo "<td>" . $row["semestre"] . "</td>";
                echo "<td>" . $row["edad"] . "</td>";
                echo "<td>" . $row["fecha_nacimiento"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No hay profesores registrados</td></tr>";
        }
    ?>
    </table>
</body>
</html>
