<?php
include("../db.php");

$num_fac = $_GET['num_fac'];
$cod_pro = $_GET['cod_pro'];
$sql = "SELECT * FROM DETALLE_FACTURA WHERE NUM_FAC='$num_fac' AND COD_PRO='$cod_pro'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h2>Editar Detalle</h2>
<form action="procesar_actualizar.php" method="POST">
    <input type="hidden" name="num_fac" value="<?= $row['NUM_FAC'] ?>">
    <input type="hidden" name="cod_pro" value="<?= $row['COD_PRO'] ?>">
    Cantidad: <input type="number" name="cant_det" value="<?= $row['CANT_DET'] ?>"><br><br>
    Precio: <input type="number" step="0.01" name="pre_det" value="<?= $row['PRE_DET'] ?>"><br><br>
    <button type="submit">Actualizar</button>
</form>
