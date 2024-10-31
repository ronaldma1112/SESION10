<?php
include("conexion.php");

// Crear base de datos
$sql = "CREATE DATABASE data_noche";
if ($conexion->query($sql) === TRUE) {
    echo "Base de datos creada exitosamente.";
} else {
    echo "Error al crear la base de datos: " . $conexion->error;
}

$conexion->close();
?>
