<?php
    include 'conexion.php';

    $sql = "SELECT * FROM nomina";
    $result = $conexion->query($sql);
    
echo "<a href='index.php'>Volver al inicio</a>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Consultar Nomina</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Listado de Nomina</h1>
    <table class="tabla">

    <tr>
        <th>salario</th>
        <th>tipo_vinculacion</th>
    </tr>
    <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["salario"] . "</td>";
                echo "<td>" . $row["tipo_vinculacion"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>No hay nomina registrada</td></tr>";
        }
    ?>
    </table>
</body>
</html>
