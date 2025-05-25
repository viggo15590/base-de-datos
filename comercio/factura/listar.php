<?php
include("../db.php");

$result = $conn->query("SELECT * FROM FACTURA");
?>

<h2>Facturas Registradas</h2>
<a href="form_factura.php">Registrar nueva factura</a>
<table border="1">
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
            <a href="actualizar.php?num_fac=<?= $row['NUM_FAC'] ?>">Editar</a> |
            <a href="eliminar.php?num_fac=<?= $row['NUM_FAC'] ?>" onclick="return confirm('¿Eliminar factura?')">Eliminar</a>
        </td>
    </tr>
<?php endwhile; ?>
</table>
<br><br>
<a href="/comercio/">
    <button style="padding: 10px 20px; font-size: 16px;">Volver al inicio</button>
</a>

<?php $conn->close(); ?>
