<?php
include("../db.php");

$cod_pro = $_GET['cod_pro'];
$sql = "DELETE FROM PRODUCTO WHERE COD_PRO = '$cod_pro'";

if ($conn->query($sql) === TRUE) {
    echo "Producto eliminado. <a href='listar.php'>Volver</a>";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
