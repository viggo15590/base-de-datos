<?php
include("../db.php");

$cod_pro = $_POST['cod_pro'];
$des_pro = $_POST['des_pro'];
$pre_pro = $_POST['pre_pro'];
$sac_pro = $_POST['sac_pro'];
$smi_pro = $_POST['smi_pro'];
$uni_pro = $_POST['uni_pro'];
$lin_pro = $_POST['lin_pro'];
$imp_pro = $_POST['imp_pro'];

$sql = "INSERT INTO PRODUCTO (COD_PRO, DES_PRO, PRE_PRO, SAC_PRO, SMI_PRO, UNI_PRO, LIN_PRO, IMP_PRO)
        VALUES ('$cod_pro', '$des_pro', '$pre_pro', '$sac_pro', '$smi_pro', '$uni_pro', '$lin_pro', '$imp_pro')";

if ($conn->query($sql) === TRUE) {
    echo "Producto registrado correctamente. <a href='listar.php'>Ver lista</a>";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
