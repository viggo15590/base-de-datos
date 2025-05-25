<!DOCTYPE html>
<html>
<head>
    <title>Registrar Factura</title>
</head>
<body>
    <h2>Registrar Factura</h2>
    <form action="insertar.php" method="POST">
        Número Factura: <input type="text" name="num_fac" required><br><br>
        Fecha Factura: <input type="date" name="fec_fac"><br><br>
        Código Cliente: <input type="text" name="cod_cli"><br><br>
        Fecha Cancelación: <input type="date" name="fec_can"><br><br>
        Estado: <input type="text" name="est_fac"><br><br>
        Código Vendedor: <input type="text" name="cod_ven"><br><br>
        Porcentaje JGV: <input type="number" step="0.01" name="por_jgv"><br><br>
        <button type="submit">Guardar</button>
    </form>

    <p><a href="listar.php">Ver facturas registradas</a></p>
</body>
</html>
