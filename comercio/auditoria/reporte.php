<?php
include("../db.php");

$sql = "
SELECT 
    v.COD_VEN,
    v.NOM_VEN,
    v.APE_VEN,
    COALESCE(SUM(d.CANT_DET * d.PRE_DET), 0) AS total_ventas
FROM VENDEDOR v
LEFT JOIN FACTURA f ON v.COD_VEN = f.COD_VEN
LEFT JOIN DETALLE_FACTURA d ON f.NUM_FAC = d.NUM_FAC
GROUP BY v.COD_VEN, v.NOM_VEN, v.APE_VEN
ORDER BY total_ventas ASC
LIMIT 3
";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reporte - Ventas más bajas</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <div class="form-container">
        <h2>3 Empleados con Menor Valor de Ventas</h2>
        <table>
            <tr>
                <th>Código Vendedor</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Total Ventas</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['COD_VEN'] ?></td>
                    <td><?= $row['NOM_VEN'] ?></td>
                    <td><?= $row['APE_VEN'] ?></td>
                    <td>$<?= number_format($row['total_ventas'], 2) ?></td>
                </tr>
            <?php endwhile; ?>
        </table>

        <div class="actions-bottom" style="text-align:center; margin-top: 20px;">
            <a href="../index.php" class="btn-link">Volver al inicio</a>
        </div>
    </div>
</body>
</html>

<?php $conn->close(); ?>
