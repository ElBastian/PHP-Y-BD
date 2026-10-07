<?php
require "conexion.php";

$sql = "SELECT * FROM calificaciones";
$resultado = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calificaciones</title>
</head>
<body>
    <h1>Lista de calificaciones</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Materia</th>
            <th>Calificación</th>
        </tr>
        <?php while ($fila = $resultado->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $fila["id"]; ?></td>
                <td><?php echo htmlspecialchars($fila["nombre"]); ?></td>
                <td><?php echo htmlspecialchars($fila["materia"]); ?></td>
                <td><?php echo $fila["calificacion"]; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
<?php $conexion->close(); ?>