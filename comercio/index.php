<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Comercio - Menú Principal</title>
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
        }

        h1, h2 {
            color: #2c3e50;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .menu-item {
            background: #ffffff;
            padding: 30px 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-decoration: none;
            color: #2c3e50;
            font-weight: bold;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .menu-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            background: #eaf2f8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sistema de Gestión de Comercio</h1>
        <h2>Menú Principal</h2>

       <div class="menu-grid">
    <a class="menu-item" href="cliente/listar.php">
        Clientes<br>
        <img src="https://img.icons8.com/ios-filled/100/000000/user-group-man-man.png" alt="Clientes" width="60">
    </a>

    <a class="menu-item" href="producto/listar.php">
        Productos<br>
        <img src="https://img.icons8.com/ios-filled/100/000000/shopping-bag.png" alt="Productos" width="60">
    </a>

    <a class="menu-item" href="factura/listar.php">
        Facturas<br>
        <img src="https://img.icons8.com/ios-filled/100/000000/invoice.png" alt="Facturas" width="60">
    </a>

    <a class="menu-item" href="detalle_factura/listar.php">
        Detalle Facturas<br>
        <img src="https://img.icons8.com/ios-filled/100/000000/bill.png" alt="Detalle Factura" width="60">
    </a>

    <a class="menu-item" href="auditoria/listar.php">
        Auditoría<br>
        <img src="https://img.icons8.com/ios-filled/100/000000/inspection.png" alt="Auditoría" width="60">
    </a>
    <a class="menu-item" href="auditoria/reporte.php">
        Reporte Ventas<br>
        <img src="https://img.icons8.com/ios-filled/100/000000/inspection.png" alt="Reporte Ventas" width="60">
    </a>
</div>
    </div>
</body>
</html>

