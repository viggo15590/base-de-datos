<?php
include("../db.php");

$cod_cli = $_GET['cod_cli'];
$sql = "SELECT * FROM CLIENTE WHERE COD_CLI = '$cod_cli'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h2>Editar Cliente</h2>
<form action="procesar_actualizar.php" method="POST">
    <input type="hidden" name="cod_cli" value="<?= $row['COD_CLI'] ?>">
    Nombre: <input type="text" name="nom_cli" value="<?= $row['NOM_CLI'] ?>"><br><br>
    Apellido: <input type="text" name="ape_cli" value="<?= $row['APE_CLI'] ?>"><br><br>
    Dirección: <input type="text" name="dir_cli" value="<?= $row['DIR_CLI'] ?>"><br><br>
    Teléfono: <input type="text" name="tel_cli" value="<?= $row['TEL_CLI'] ?>"><br><br>
    Código Distrito: <input type="text" name="cod_dis" value="<?= $row['COD_DIS'] ?>"><br><br>
    <button type="submit">Actualizar</button>
</form>
