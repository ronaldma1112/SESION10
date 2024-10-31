<?php
include("conexion.php");

$sql = "UPDATE t_usuario SET nombre_usu = 'Marciano' WHERE id = 2";

if ($conexion->query($sql) === TRUE) {
    echo "Registro actualizado exitosamente.";
} else {
    echo "Error al actualizar el registro: " . $conexion->error;
}

$conexion->close();
?>
