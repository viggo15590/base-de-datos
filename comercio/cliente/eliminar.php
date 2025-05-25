<?php
include("../db.php");

$cod_cli = $_GET['cod_cli'];

$sql = "DELETE FROM CLIENTE WHERE COD_CLI = '$cod_cli'";

if ($conn->query($sql) === TRUE) {
    echo "Cliente eliminado. <a href='listar.php'>Volver</a>";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
