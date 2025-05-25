<?php
include("../db.php");

$num_fac = $_POST['num_fac'];
$cod_pro = $_POST['cod_pro'];
$cant_det = $_POST['cant_det'];
$pre_det = $_POST['pre_det'];

$sql = "INSERT INTO DETALLE_FACTURA (NUM_FAC, COD_PRO, CANT_DET, PRE_DET)
        VALUES ('$num_fac', '$cod_pro', '$cant_det', '$pre_det')";

if ($conn->query($sql) === TRUE) {
    echo "Detalle guardado. <a href='listar.php'>Ver lista</a>";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
