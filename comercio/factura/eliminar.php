<?php
include("../db.php");

$num_fac = $_GET['num_fac'];
$sql = "DELETE FROM FACTURA WHERE NUM_FAC = '$num_fac'";

if ($conn->query($sql) === TRUE) {
    echo "Factura eliminada. <a href='listar.php'>Volver</a>";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
