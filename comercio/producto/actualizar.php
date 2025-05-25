<?php
include("../db.php");

$cod_pro = $_GET['cod_pro'];
$sql = "SELECT * FROM PRODUCTO WHERE COD_PRO = '$cod_pro'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h2>Editar Producto</h2>
<form action="procesar_actualizar.php" method="POST">
    <input type="hidden" name="cod_pro" value="<?= $row['COD_PRO'] ?>">
    Descripción: <input type="text" name="des_pro" value="<?= $row['DES_PRO'] ?>"><br><br>
    Precio: <input type="number" step="0.01" name="pre_pro" value="<?= $row['PRE_PRO'] ?>"><br><br>
    Stock: <input type="number" name="sac_pro" value="<?= $row['SAC_PRO'] ?>"><br><br>
    Stock Mínimo: <input type="number" name="smi_pro" value="<?= $row['SMI_PRO'] ?>"><br><br>
    Unidad: <input type="text" name="uni_pro" value="<?= $row['UNI_PRO'] ?>"><br><br>
    Línea: <input type="text" name="lin_pro" value="<?= $row['LIN_PRO'] ?>"><br><br>
    Impuesto: <input type="text" name="imp_pro" value="<?= $row['IMP_PRO'] ?>"><br><br>
    <button type="submit">Actualizar</button>
</form>
