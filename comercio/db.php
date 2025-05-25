<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "mi_base_de_datos"; // Cambia esto si tu base de datos tiene otro nombre

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
