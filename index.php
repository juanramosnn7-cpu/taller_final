<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Académico</title>

    <link rel="stylesheet" href="estilos.css">
</head>

<body>

<div class="contenedor">
    

    <h1>Sistema Académico</h1>

    <form action="guardar_estudiantes.php" method="post">
        <h2>Estudiantes</h2>

        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellido" placeholder="Apellido" required>
        <input type="text" name="tipo_id" placeholder="Tipo de ID" required>
        <input type="text" name="programa" placeholder="Programa Académico" required>
        <input type="text" name="semestre" placeholder="Semestre" required>
        <input type="number" name="edad" placeholder="Edad" required>
        <input type="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" required>
        
        <button type="submit">Guardar</button>

    </form>

    <form action="guardar_profesor.php" method="post">
        <h2>Profesores</h2>

        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellido" placeholder="Apellido" required>
        <input type="text" name="tipo_id" placeholder="Tipo de ID" required>
        <input type="text" name="programa" placeholder="Programa Académico" required>
        <input type="text" name="semestre" placeholder="Semestre" required>
        <input type="number" name="edad" placeholder="Edad" required>
        <input type="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" required>
        
        <button type="submit">Guardar</button>

    </form>

    <form action="guardar_nomina.php" method="post">
        <h2>NOMINA</h2>

        <input type="number" name="salario" placeholder="Salario" required>
        <input type="text" name="tipo_vinculacion" placeholder="Tipo de Vinculación" required>
        
        <button type="submit">Guardar</button>
    </form>

<section>
    <a href="consultar_estudiantes.php">
        <button>Consultar Estudiantes</button>
    </a>

    <a href="consultar_profesores.php">
        <button>Consultar Profesores</button>
    </a>

    <a href="consultar_nomina.php">
        <button>Consultar NOMINA</button>
    </a>
</section>

</div>
</body>

</html>