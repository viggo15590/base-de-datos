<?php
include("../db.php");

$result = $conn->query("SELECT * FROM PRODUCTO");
?>

<h2>Productos Registrados</h2>
<a href="form_producto.php">Registrar nuevo producto</a>
<table border="1">
    <tr>
        <th>Código</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Stock Mínimo</th>
        <th>Unidad</th>
        <th>Línea</th>
        <th>Impuesto</th>
        <th>Acciones</th>
    </tr>

<?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['COD_PRO'] ?></td>
        <td><?= $row['DES_PRO'] ?></td>
        <td><?= $row['PRE_PRO'] ?></td>
        <td><?= $row['SAC_PRO'] ?></td>
        <td><?= $row['SMI_PRO'] ?></td>
        <td><?= $row['UNI_PRO'] ?></td>
        <td><?= $row['LIN_PRO'] ?></td>
        <td><?= $row['IMP_PRO'] ?></td>
        <td>
            <a href="actualizar.php?cod_pro=<?= $row['COD_PRO'] ?>">Editar</a> |
            <a href="eliminar.php?cod_pro=<?= $row['COD_PRO'] ?>" onclick="return confirm('¿Eliminar producto?')">Eliminar</a>
        </td>
    </tr>
<?php endwhile; ?>
</table>
<br><br>
<a href="/comercio/">
    <button style="padding: 10px 20px; font-size: 16px;">Volver al inicio</button>
</a>

<?php $conn->close(); ?>
