<?php
include("../db.php");

$result = $conn->query("SELECT * FROM CLIENTE");
?>

<h2>Clientes Registrados</h2>
<a href="form_cliente.php">Registrar nuevo cliente</a>
<table border="1">
    <tr>
        <th>Código</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Código Distrito</th>
        <th>Acciones</th>
    </tr>

<?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['COD_CLI'] ?></td>
        <td><?= $row['NOM_CLI'] ?></td>
        <td><?= $row['APE_CLI'] ?></td>
        <td><?= $row['DIR_CLI'] ?></td>
        <td><?= $row['TEL_CLI'] ?></td>
        <td><?= $row['COD_DIS'] ?></td>
        <td>
            <a href="actualizar.php?cod_cli=<?= $row['COD_CLI'] ?>">Editar</a> |
            <a href="eliminar.php?cod_cli=<?= $row['COD_CLI'] ?>" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
        </td>
    </tr>
<?php endwhile; ?>
</table>
<br><br>
<a href="/comercio/">
    <button style="padding: 10px 20px; font-size: 16px;">Volver al inicio</button>
</a>

<?php $conn->close(); ?>
