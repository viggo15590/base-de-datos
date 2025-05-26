<!DOCTYPE html>
<html>
<head>
    <title>Registrar Factura</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <div class="form-container">
        <h2>Registrar Factura</h2>
        <form action="insertar.php" method="POST">
            <label for="num_fac">Número Factura:</label>
            <input type="text" id="num_fac" name="num_fac" required>

            <label for="fec_fac">Fecha Factura:</label>
            <input type="date" id="fec_fac" name="fec_fac">

            <label for="cod_cli">Código Cliente:</label>
            <input type="text" id="cod_cli" name="cod_cli">

            <label for="fec_can">Fecha Cancelación:</label>
            <input type="date" id="fec_can" name="fec_can">

            <label for="est_fac">Estado:</label>
            <input type="text" id="est_fac" name="est_fac">

            <label for="cod_ven">Código Vendedor:</label>
            <input type="text" id="cod_ven" name="cod_ven">

            <label for="por_jgv">Porcentaje JGV:</label>
            <input type="number" step="0.01" id="por_jgv" name="por_jgv">

            <button type="submit" class="btn">Guardar</button>
        </form>

        <div class="actions-bottom" style="text-align:center; margin-top: 20px;">
            <a href="listar.php" class="btn-link">Ver facturas registradas</a>
        </div>
    </div>
</body>
</html>

