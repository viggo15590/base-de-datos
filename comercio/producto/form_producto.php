<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="UTF-8"> <title>Registrar Producto</title>
         <link rel="stylesheet" href="../css/estilos.css"> 
        </head> 
        <body> <div class="form-container"> <h2>Registrar Producto</h2> 
        <form action="insertar.php" method="POST" class="form-box"> 
            <label>Código:</label> 
            <input type="text" name="cod_pro" required>

    <label>Descripción:</label>
    <input type="text" name="des_pro" required>

    <label>Precio:</label>
    <input type="number" step="0.01" name="pre_pro" required>

    <label>Stock Actual:</label>
    <input type="number" name="sac_pro">

    <label>Stock Mínimo:</label>
    <input type="number" name="smi_pro">

    <label>Unidad:</label>
    <input type="text" name="uni_pro">

    <label>Línea:</label>
    <input type="text" name="lin_pro">

    <label>Impuesto:</label>
    <input type="text" name="imp_pro">

    <div class="form-actions">
        <button type="submit" class="btn">Guardar</button>
        <a href="listar.php" class="btn-secondary">Ver productos registrados</a>
    </div>
</form>
</div> </body> </html>