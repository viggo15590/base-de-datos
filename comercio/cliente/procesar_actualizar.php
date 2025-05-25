<?php
include("../db.php");

$cod_cli = $_POST['cod_cli'];
$nom_cli = $_POST['nom_cli'];
$ape_cli = $_POST['ape_cli'];
$dir_cli = $_POST['dir_cli'];
$tel_cli = $_POST['tel_cli'];
$cod_dis = $_POST['cod_dis'];

$sql = "UPDATE CLIENTE SET 
        NOM_CLI = '$nom_cli',
        APE_CLI = '$ape_cli',
        DIR_CLI = '$dir_cli',
        TEL_CLI = '$tel_cli',
        COD_DIS = '$cod_dis'
        WHERE COD_CLI = '$cod_cli'";

if ($conn->query($sql) === TRUE) {
    echo "Cliente actualizado correctamente. <a href='listar.php'>Volver</a>";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
