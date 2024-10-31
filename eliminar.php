<?php
include("conexion.php");

// SQL to delete a record
$sql = "DELETE FROM t_usuario WHERE id_usuario = 3";

if ($conexion->query($sql) === TRUE) {
    echo "Registro eliminado exitosamente.";
} else {
    echo "Error deleting record: " . $conexion->error;
}

$conexion->close();
?>
