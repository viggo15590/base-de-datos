<?php
include("../db.php");

$num_fac = $_GET['num_fac'];
$cod_pro = $_GET['cod_pro'];

$sql = "DELETE FROM DETALLE_FACTURA WHERE NUM_FAC = '$num_fac' AND COD_PRO = '$cod_pro'";

if ($conn->query($sql) === TRUE) {
    echo "Detalle eliminado. <a href='listar.php'>Volver</a>";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
