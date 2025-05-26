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
    <style> 
    body { font-family: Arial, sans-serif; margin: 20px; background: #f4f4f4; } 
    h1 { text-align: center; color: #2c3e50; } 
    .audit-container { overflow-x: auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 8px rgba(0,0,0,0.1); } 
    table { border-collapse: collapse; width: 100%; min-width: 1200px; } 
    th, td { padding: 10px; border: 1px solid #ccc; text-align: left; vertical-align: top; font-size: 14px; } 
    thead { background-color: #27ae60; color: white; } 
    tbody tr:nth-child(even) { background-color: #f9f9f9; } 
    .btn { background-color: #3498db; color: white; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer; } 
    .actions-bottom { margin-top: 20px; text-align: center; } 
    /* Colores por acción */ 
    td[data-action="INSERT"] { background-color: #e8f8f5; } 
    td[data-action="UPDATE"] { background-color: #fef9e7; } 
    td[data-action="DELETE"] { background-color: #fdecea; } 
    pre { white-space: pre-wrap; word-break: break-word; margin: 0; } 
    </style>
</head>
<body>
    <h1>Registro de Auditoría</h1>
    <div class="audit-container">
    <table>
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
                <td data-action="<?= $row['TIPO_ACCION'] ?>"><?= htmlspecialchars($row['TIPO_ACCION']) ?></td>
                <td><?= htmlspecialchars($row['USUARIO_BD']) ?></td>
                <td><?= htmlspecialchars($row['FECHA_ACCION']) ?></td>
                <td style="white-space: pre-wrap; word-break: break-word;"><?= nl2br(htmlspecialchars($row['VALOR_ANTERIOR'])) ?></td>
                <td style="white-space: pre-wrap; word-break: break-word;"><?= nl2br(htmlspecialchars($row['VALOR_NUEVO'])) ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <br><br>

        <div class="actions-bottom">
            <a href="../index.php">
                <button class="btn">Volver al inicio</button>
            </a>
        </div>

</body>
</html>
