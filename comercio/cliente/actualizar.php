<?php
include("../db.php");

$cod_cli = $_GET['cod_cli'];
$sql = "SELECT * FROM CLIENTE WHERE COD_CLI = '$cod_cli'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Detalle</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<div class="form-container">
    <form action="procesar_actualizar.php" method="POST">
        <input type="hidden" name="cod_cli" value="<?= $row['COD_CLI'] ?>">

        <label for="nom_cli">Nombre:</label>
        <input type="text" id="nom_cli" name="nom_cli" value="<?= $row['NOM_CLI'] ?>" required>

        <label for="ape_cli">Apellido:</label>
        <input type="text" id="ape_cli" name="ape_cli" value="<?= $row['APE_CLI'] ?>" required>

        <label for="dir_cli">Dirección:</label>
        <input type="text" id="dir_cli" name="dir_cli" value="<?= $row['DIR_CLI'] ?>" required>

        <label for="tel_cli">Teléfono:</label>
        <input type="text" id="tel_cli" name="tel_cli" value="<?= $row['TEL_CLI'] ?>" required>

        <label for="cod_dis">Código Distrito:</label>
        <input type="text" id="cod_dis" name="cod_dis" value="<?= $row['COD_DIS'] ?>" required>
</div>
<div class="form-actions">
        <button type="submit" class="btn">Actualizar</button>
        <a href="listar.php" class="btn">Cancelar</a>
    </form>
</div>
</body>
</html>