<?php
include("../db.php");

$cod_pro = $_GET['cod_pro'];
$sql = "SELECT * FROM PRODUCTO WHERE COD_PRO = '$cod_pro'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html> <html> <head> <meta charset="UTF-8"> <title>Editar Producto</title> <link rel="stylesheet" href="../css/estilos.css"> </head> <body> <div class="form-container"> <h2>Editar Producto</h2> <form action="procesar_actualizar.php" method="POST" class="form-box"> <input type="hidden" name="cod_pro" value="<?= $row['COD_PRO'] ?>">
php-template
Copiar código
    <label>Descripción:</label>
    <input type="text" name="des_pro" value="<?= $row['DES_PRO'] ?>" required>

    <label>Precio:</label>
    <input type="number" step="0.01" name="pre_pro" value="<?= $row['PRE_PRO'] ?>" required>

    <label>Stock:</label>
    <input type="number" name="sac_pro" value="<?= $row['SAC_PRO'] ?>">

    <label>Stock Mínimo:</label>
    <input type="number" name="smi_pro" value="<?= $row['SMI_PRO'] ?>">

    <label>Unidad:</label>
    <input type="text" name="uni_pro" value="<?= $row['UNI_PRO'] ?>">

    <label>Línea:</label>
    <input type="text" name="lin_pro" value="<?= $row['LIN_PRO'] ?>">

    <label>Impuesto:</label>
    <input type="text" name="imp_pro" value="<?= $row['IMP_PRO'] ?>">

    <div class="form-actions">
        <button type="submit" class="btn">Actualizar</button>
        <a href="listar.php" class="btn">Cancelar</a>
    </div>
</form>
</div> 
</body>
 </html>
