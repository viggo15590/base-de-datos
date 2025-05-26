<?php
include("../db.php");

$result = $conn->query("SELECT * FROM CLIENTE");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Clientes Registrados</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <div class="table-container">
        <h2>Clientes Registrados</h2>

        <div class="actions-top">
            <a href="form_cliente.php" class="btn-link">Registrar nuevo cliente</a>
        </div>

        <table class="styled-table">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Código Distrito</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['COD_CLI'] ?></td>
                        <td><?= $row['NOM_CLI'] ?></td>
                        <td><?= $row['APE_CLI'] ?></td>
                        <td><?= $row['DIR_CLI'] ?></td>
                        <td><?= $row['TEL_CLI'] ?></td>
                        <td><?= $row['COD_DIS'] ?></td>
                        <td>
                            <a href="actualizar.php?cod_cli=<?= $row['COD_CLI'] ?>" class="action-link">Editar</a> |
                            <a href="eliminar.php?cod_cli=<?= $row['COD_CLI'] ?>" class="action-link delete" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
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
