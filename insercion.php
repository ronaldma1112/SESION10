<?php
include("conexion.php");

$sql = "INSERT INTO t_usuario (nombre_usu, password_usu, estado) 
VALUES ('José', 'data2024', 1)";

if ($conexion->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>
