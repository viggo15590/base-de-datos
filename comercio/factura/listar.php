<?php
include("../db.php");
$result = $conn->query("SELECT * FROM FACTURA");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Factura</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>   
    
    <div class="actions-top">
        <a href="form_factura.php" class="btn-link">Registrar nueva factura</a>
    </div>

    <table class="styled-table">
        <thead>
            <tr>
                <th>Número</th>
                <th>Fecha</th>
                <th>Cliente</th>
                <th>Fecha Cancelación</th>
                <th>Estado</th>
                <th>Vendedor</th>
                <th>Porcentaje JGV</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['NUM_FAC'] ?></td>
                <td><?= $row['FEC_FAC'] ?></td>
                <td><?= $row['COD_CLI'] ?></td>
                <td><?= $row['FEC_CAN'] ?></td>
                <td><?= $row['EST_FAC'] ?></td>
                <td><?= $row['COD_VEN'] ?></td>
                <td><?= $row['POR_JGV'] ?></td>
                <td>
                    <a href="actualizar.php?num_fac=<?= $row['NUM_FAC'] ?>" class="action-link">Editar</a> |
                    <a href="eliminar.php?num_fac=<?= $row['NUM_FAC'] ?>" class="action-link delete" onclick="return confirm('¿Eliminar factura?')">Eliminar</a>
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
