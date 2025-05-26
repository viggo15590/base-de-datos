<?php 
include("../db.php"); $result = $conn->query("SELECT * FROM PRODUCTO"); ?> 
<!DOCTYPE html> <html> <head> <meta charset="UTF-8"> 
<title>Productos Registrados</title> 
<link rel="stylesheet" href="../css/estilos.css">
</head> 
<body> 
    <div class="page-container"> 
        <h2>Productos Registrados</h2> 
        <div class="actions-top">
            <a href="form_producto.php" class="btn-link">Registrar nuevo producto</a>
        </div>

<table>
    <thead>
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
    </thead>
    <tbody>
    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row['COD_PRO']) ?></td>
            <td><?= htmlspecialchars($row['DES_PRO']) ?></td>
            <td><?= number_format($row['PRE_PRO'], 2) ?></td>
            <td><?= (int)$row['SAC_PRO'] ?></td>
            <td><?= (int)$row['SMI_PRO'] ?></td>
            <td><?= htmlspecialchars($row['UNI_PRO']) ?></td>
            <td><?= htmlspecialchars($row['LIN_PRO']) ?></td>
            <td><?= htmlspecialchars($row['IMP_PRO']) ?></td>
            <td class="action-links">
                <a href="actualizar.php?cod_pro=<?= urlencode($row['COD_PRO']) ?>" class="action-link">Editar</a> |
                <a href="eliminar.php?cod_pro=<?= urlencode($row['COD_PRO']) ?>" class="action-link delete" onclick="return confirm('¿Eliminar producto?')">Eliminar</a>
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
