<?php
include("conexion.php");

// SQL para crear la tabla
$sql = "CREATE TABLE `t_usuario` (
    `id_usuario` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nombre_usu` varchar(100) COLLATE utf8mb3_spanish_ci NOT NULL,
    `password_usu` varchar(100) COLLATE utf8mb3_spanish_ci NOT NULL,
    `estado` bit(1) NOT NULL
) ENGINE=InnoDB";

if ($conexion->query($sql) === TRUE) {
    echo "La tabla t_usuario se creó correctamente";
} else {
    echo "Error al crear la tabla: " . $conexion->error;
}

$conexion->close();
?>

Crearemos una nueva conexión con el nombre: conexion.php

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_noche";

// Crear conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

// Comprobar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>

