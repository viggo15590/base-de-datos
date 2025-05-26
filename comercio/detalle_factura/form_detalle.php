<!DOCTYPE html>
<html>
<head>
    <title>Agregar Detalle a Factura</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <div class="form-container">
        <h2>Agregar Detalle a Factura</h2>
        <form action="insertar.php" method="POST">
            <label for="num_fac">Nº Factura:</label>
            <input type="text" id="num_fac" name="num_fac" required>

            <label for="cod_pro">Código Producto:</label>
            <input type="text" id="cod_pro" name="cod_pro" required>

            <label for="cant_det">Cantidad:</label>
            <input type="number" id="cant_det" name="cant_det" required>

            <label for="pre_det">Precio Detalle:</label>
            <input type="number" step="0.01" id="pre_det" name="pre_det" required>
