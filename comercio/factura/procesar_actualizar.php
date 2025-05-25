<?php
include("../db.php");

$num_fac = $_POST['num_fac'];
$fec_fac = $_POST['fec_fac'];
$cod_cli = $_POST['cod_cli'];
$fec_can = $_POST['fec_can'];
$est_fac = $_POST['est_fac'];
$cod_ven = $_POST['cod_ven'];
$por_jgv = $_POST['por_jgv'];

$sql = "UPDATE FACTURA SET 
        FEC_FAC = '$fec_fac',
        COD_CLI = '$cod_cli',
        FEC_CAN = '$fec_can',
        EST_FAC = '$est_fac',
        COD_VEN = '$cod_ven',
        POR_JGV = '$por_jgv'
        WHERE NUM_FAC = '$num_fac'";

if ($conn->query($sql) === TRUE) {
    echo "Factura actualizada. <a href='listar.php'>Volver</a>";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
