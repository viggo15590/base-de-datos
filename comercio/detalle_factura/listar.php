<?php
include("../db.php");

$result = $conn->query("SELECT * FROM DETALLE_FACTURA");
?>

<h2>Detalles de Factura</h2>
<a href="form_detalle.php">Agregar nuevo detalle</a>
<table border="1">
    <tr>
        <th>Factura</th>
        <th>Producto</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Acciones</th>
    </tr>

<?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['NUM_FAC'] ?></td>
        <td><?= $row['COD_PRO'] ?></td>
        <td><?= $row['CANT_DET'] ?></td>
        <td><?= $row['PRE_DET'] ?></td>
        <td>
            <a href="actualizar.php?num_fac=<?= $row['NUM_FAC'] ?>&cod_pro=<?= $row['COD_PRO'] ?>">Editar</a> |
            <a href="eliminar.php?num_fac=<?= $row['NUM_FAC'] ?>&cod_pro=<?= $row['COD_PRO'] ?>" onclick="return confirm('¿Eliminar?')">Eliminar</a>
        </td>
    </tr>
<?php endwhile; ?>
</table>
<br><br>
<a href="/comercio/">
    <button style="padding: 10px 20px; font-size: 16px;">Volver al inicio</button>
</a>

<?php $conn->close(); ?>
