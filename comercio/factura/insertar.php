<?php
include("../db.php");

$num_fac = $_POST['num_fac'];
$fec_fac = $_POST['fec_fac'];
$cod_cli = $_POST['cod_cli'];
$fec_can = $_POST['fec_can'];
$est_fac = $_POST['est_fac'];
$cod_ven = $_POST['cod_ven'];
$por_jgv = $_POST['por_jgv'];

$sql = "INSERT INTO FACTURA (NUM_FAC, FEC_FAC, COD_CLI, FEC_CAN, EST_FAC, COD_VEN, POR_JGV)
        VALUES ('$num_fac', '$fec_fac', '$cod_cli', '$fec_can', '$est_fac', '$cod_ven', '$por_jgv')";

if ($conn->query($sql) === TRUE) {
    echo "Factura registrada correctamente. <a href='listar.php'>Ver lista</a>";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
