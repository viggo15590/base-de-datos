<?php
include("../db.php");

$num_fac = $_GET['num_fac'];
$cod_pro = $_GET['cod_pro'];
$sql = "SELECT * FROM DETALLE_FACTURA WHERE NUM_FAC='$num_fac' AND COD_PRO='$cod_pro'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Detalle</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <div class="form-container">
        <h2>Editar Detalle de Factura</h2>
        <form action="procesar_actualizar.php" method="POST">
            <input type="hidden" name="num_fac" value="<?= $row['NUM_FAC'] ?>">
            <input type="hidden" name="cod_pro" value="<?= $row['COD_PRO'] ?>">

            <label for="cant_det">Cantidad:</label>
            <input type="number" id="cant_det" name="cant_det" value="<?= $row['CANT_DET'] ?>" required>

            <label for="pre_det">Precio:</label>
            <input type="number" step="0.01" id="pre_det" name="pre_det" value="<?= $row['PRE_DET'] ?>" required>

        <div class="form-actions">    
            <button type="submit" class="btn">Actualizar</button>
            <a href="listar.php" class="btn">Cancelar</a>
        </div>
        </form>
    </div>
</body>
</html>
