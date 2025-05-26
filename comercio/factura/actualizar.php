<?php
include("../db.php");

$num_fac = $_GET['num_fac'];
$sql = "SELECT * FROM FACTURA WHERE NUM_FAC = '$num_fac'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Factura</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <div class="form-container">
        <h2>Editar Factura</h2>
        <form action="procesar_actualizar.php" method="POST">
            <input type="hidden" name="num_fac" value="<?= $row['NUM_FAC'] ?>">

            <label for="fec_fac">Fecha:</label>
            <input type="date" id="fec_fac" name="fec_fac" value="<?= $row['FEC_FAC'] ?>" required>

            <label for="cod_cli">Cliente:</label>
            <input type="text" id="cod_cli" name="cod_cli" value="<?= $row['COD_CLI'] ?>" required>

            <label for="fec_can">Fecha Cancelación:</label>
            <input type="date" id="fec_can" name="fec_can" value="<?= $row['FEC_CAN'] ?>">

            <label for="est_fac">Estado:</label>
            <input type="text" id="est_fac" name="est_fac" value="<?= $row['EST_FAC'] ?>">

            <label for="cod_ven">Vendedor:</label>
            <input type="text" id="cod_ven" name="cod_ven" value="<?= $row['COD_VEN'] ?>">

            <label for="por_jgv">Porcentaje JGV:</label>
            <input type="number" step="0.01" id="por_jgv" name="por_jgv" value="<?= $row['POR_JGV'] ?>">

            <div class="form-actions">
                <button type="submit" class="btn">Actualizar</button>
                <a href="listar.php" class="btn">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>

