<?php
include("../db.php");

$cod_cli = $_POST['cod_cli'];
$nom_cli = $_POST['nom_cli'];
$ape_cli = $_POST['ape_cli'];
$dir_cli = $_POST['dir_cli'];
$tel_cli = $_POST['tel_cli'];
$cod_dis = $_POST['cod_dis'];

$sql = "INSERT INTO CLIENTE (COD_CLI, NOM_CLI, APE_CLI, DIR_CLI, TEL_CLI, COD_DIS) 
VALUES ('$cod_cli', '$nom_cli', '$ape_cli', '$dir_cli', '$tel_cli', '$cod_dis')";

if ($conn->query($sql) === TRUE) {
    echo "Cliente registrado correctamente. <a href='listar.php'>Ver lista</a>";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
