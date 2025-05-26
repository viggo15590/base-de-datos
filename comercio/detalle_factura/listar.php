<?php
include("../db.php");
$result = $conn->query("SELECT * FROM DETALLE_FACTURA");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detalles de Factura</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <div class="table-container">
        <h2>Detalles de Factura</h2>

        <div class="actions-top">
            <a href="form_detalle.php" class="btn-link">Agregar nuevo detalle</a>
        </div>

        <table class="styled-table">
            <thead>
                <tr>
                    <th>Factura</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['NUM_FAC'] ?></td>
                        <td><?= $row['COD_PRO'] ?></td>
                        <td><?= $row['CANT_DET'] ?></td>
                        <td><?= $row['PRE_DET'] ?></td>
                        <td>
                            <a href="actualizar.php?num_fac=<?= $row['NUM_FAC'] ?>&cod_pro=<?= $row['COD_PRO'] ?>" class="action-link">Editar</a> |
                            <a href="eliminar.php?num_fac=<?= $row['NUM_FAC'] ?>&cod_pro=<?= $row['COD_PRO'] ?>" class="action-link delete" onclick="return confirm('¿Eliminar?')">Eliminar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <div class="actions-bottom">
            <a href="../index.php">
                <button class="btn">Volver al inicio</button>
            </a>
        </div>
    </div>

    <?php $conn->close(); ?>
</body>
</html>
