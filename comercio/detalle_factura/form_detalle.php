<!DOCTYPE html>
<html>
<head>
    <title>Agregar Detalle a Factura</title>
</head>
<body>
    <h2>Agregar Detalle a Factura</h2>
    <form action="insertar.php" method="POST">
        Nº Factura: <input type="text" name="num_fac" required><br><br>
        Código Producto: <input type="text" name="cod_pro" required><br><br>
        Cantidad: <input type="number" name="cant_det" required><br><br>
        Precio Detalle: <input type="number" step="0.01" name="pre_det" required><br><br>
        <button type="submit">Guardar Detalle</button>
    </form>

    <p><a href="listar.php">Ver Detalles</a></p>
</body>
</html>
