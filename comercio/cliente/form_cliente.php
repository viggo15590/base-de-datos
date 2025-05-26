<!DOCTYPE html>
<html>
<head>
    <title>Registrar Cliente</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <div class="form-container">
        <h2>Registrar Cliente</h2>
        <form action="insertar.php" method="POST">
            <label for="cod_cli">Código Cliente:</label>
            <input type="text" id="cod_cli" name="cod_cli" required>

            <label for="nom_cli">Nombre:</label>
            <input type="text" id="nom_cli" name="nom_cli" required>

            <label for="ape_cli">Apellido:</label>
            <input type="text" id="ape_cli" name="ape_cli" required>

            <label for="dir_cli">Dirección:</label>
            <input type="text" id="dir_cli" name="dir_cli">

            <label for="tel_cli">Teléfono:</label>
            <input type="text" id="tel_cli" name="tel_cli">

            <label for="cod_dis">Código Distrito:</label>
            <input type="text" id="cod_dis" name="cod_dis">

            <button type="submit" class="btn">Guardar</button>
        </form>

        <p class="link-volver"><a href="listar.php">Ver clientes registrados</a></p>
    </div>
</body>
</html>
