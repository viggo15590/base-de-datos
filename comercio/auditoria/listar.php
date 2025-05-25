<?php
// Conexión a la base de datos (MySQL)
include_once("../db.php");

// Consulta de auditoría
$query = "SELECT ID_AUDITORIA, NOMBRE_TABLA, TIPO_ACCION, USUARIO_BD, FECHA_ACCION, VALOR_ANTERIOR, VALOR_NUEVO FROM auditoria_cambios";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Auditoría de Cambios</title>
    <link rel="stylesheet" href="../css/estilos.css"> <!-- si tienes un CSS -->
</head>
<body>
    <h1>Registro de Auditoría</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tabla</th>
                <th>Acción</th>
                <th>Usuario</th>
                <th>Fecha</th>
                <th>Valor Anterior</th>
                <th>Valor Nuevo</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['ID_AUDITORIA']) ?></td>
                <td><?= htmlspecialchars($row['NOMBRE_TABLA']) ?></td>
                <td><?= htmlspecialchars($row['TIPO_ACCION']) ?></td>
                <td><?= htmlspecialchars($row['USUARIO_BD']) ?></td>
                <td><?= htmlspecialchars($row['FECHA_ACCION']) ?></td>
                <td><?= nl2br(htmlspecialchars($row['VALOR_ANTERIOR'])) ?></td>
                <td><?= nl2br(htmlspecialchars($row['VALOR_NUEVO'])) ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <br><br>
<a href="/comercio/">
    <button style="padding: 10px 20px; font-size: 16px;">Volver al inicio</button>
</a>

</body>
</html>
