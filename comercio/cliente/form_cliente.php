<!DOCTYPE html>
<html>
<head>
    <title>Registrar Cliente</title>
</head>
<body>
    <h2>Registrar Cliente</h2>
    <form action="insertar.php" method="POST">
        Código Cliente: <input type="text" name="cod_cli" required><br><br>
        Nombre: <input type="text" name="nom_cli" required><br><br>
        Apellido: <input type="text" name="ape_cli" required><br><br>
        Dirección: <input type="text" name="dir_cli"><br><br>
        Teléfono: <input type="text" name="tel_cli"><br><br>
        Código Distrito: <input type="text" name="cod_dis"><br><br>
        <button type="submit">Guardar</button>
    </form>

    <p><a href="listar.php">Ver clientes registrados</a></p>
</body>
</html>
