<?php
include("../db.php");

$num_fac = $_POST['num_fac'];
$cod_pro = $_POST['cod_pro'];
$cant_det = $_POST['cant_det'];
$pre_det = $_POST['pre_det'];

$sql = "UPDATE DETALLE_FACTURA SET 
        CANT_DET = '$cant_det',
        PRE_DET = '$pre_det'
        WHERE NUM_FAC = '$num_fac' AND COD_PRO = '$cod_pro'";

if ($conn->query($sql) === TRUE) {
    echo "Detalle actualizado. <a href='listar.php'>Volver</a>";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
