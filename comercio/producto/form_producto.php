<!DOCTYPE html>
<html>
<head>
    <title>Registrar Producto</title>
</head>
<body>
    <h2>Registrar Producto</h2>
    <form action="insertar.php" method="POST">
        Código: <input type="text" name="cod_pro" required><br><br>
        Descripción: <input type="text" name="des_pro" required><br><br>
        Precio: <input type="number" step="0.01" name="pre_pro" required><br><br>
        Stock Actual: <input type="number" name="sac_pro"><br><br>
        Stock Mínimo: <input type="number" name="smi_pro"><br><br>
        Unidad: <input type="text" name="uni_pro"><br><br>
        Línea: <input type="text" name="lin_pro"><br><br>
        Impuesto: <input type="text" name="imp_pro"><br><br>
        <button type="submit">Guardar</button>
    </form>

    <p><a href="listar.php">Ver productos registrados</a></p>
</body>
</html>
