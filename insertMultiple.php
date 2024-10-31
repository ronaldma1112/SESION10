<?php
include("conexion.php");

$sql = "INSERT INTO t_usuario (nombre_usu, password_usu, estado) VALUES ('John', 'Doe', 0);";
$sql .= "INSERT INTO t_usuario (nombre_usu, password_usu, estado) VALUES ('Mary', 'Moe', 0);";
$sql .= "INSERT INTO t_usuario (nombre_usu, password_usu, estado) VALUES ('Julie', 'Dooley', 0);";

if ($conexion->multi_query($sql) === TRUE) {
    echo "Nuevos registros creados exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>
