<?php
include("../db.php");

$num_fac = $_GET['num_fac'];
$sql = "SELECT * FROM FACTURA WHERE NUM_FAC = '$num_fac'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h2>Editar Factura</h2>
<form action="procesar_actualizar.php" method="POST">
    <input type="hidden" name="num_fac" value="<?= $row['NUM_FAC'] ?>">
    Fecha: <input type="date" name="fec_fac" value="<?= $row['FEC_FAC'] ?>"><br><br>
    Cliente: <input type="text" name="cod_cli" value="<?= $row['COD_CLI'] ?>"><br><br>
    Fecha Cancelación: <input type="date" name="fec_can" value="<?= $row['FEC_CAN'] ?>"><br><br>
    Estado: <input type="text" name="est_fac" value="<?= $row['EST_FAC'] ?>"><br><br>
    Vendedor: <input type="text" name="cod_ven" value="<?= $row['COD_VEN'] ?>"><br><br>
    Porcentaje JGV: <input type="number" step="0.01" name="por_jgv" value="<?= $row['POR_JGV'] ?>"><br><br>
    <button type="submit">Actualizar</button>
</form>
