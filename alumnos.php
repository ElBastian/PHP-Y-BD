<?php
require "conexion.php";

$sql = "SELECT * FROM alumnos";
$resultado = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alumnos</title>
</head>
<body>
    <h1>Lista de alumnos</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Matrícula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Fecha de nacimiento</th>
            <th>Grupo</th>
        </tr>
        <?php while ($fila = $resultado->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $fila["id"]; ?></td>
                <td><?php echo htmlspecialchars($fila["matricula"]); ?></td>
                <td><?php echo htmlspecialchars($fila["nombre"]); ?></td>
                <td><?php echo htmlspecialchars($fila["apellido"]); ?></td>
                <td><?php echo htmlspecialchars($fila["email"]); ?></td>
                <td><?php echo $fila["fecha_nacimiento"]; ?></td>
                <td><?php echo htmlspecialchars($fila["grupo"]); ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
<?php $conexion->close(); ?>