<?php
include("conexion.php");

$sql = "SELECT id_usuario, nombre_usu, password_usu, estado FROM t_usuario";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    // datos de salida de cada fila
    while ($fila = $resultado->fetch_assoc()) {
        echo "id: " . $fila["id_usuario"] . " - Nombre: " . $fila["nombre_usu"] . " - Password: " . $fila["password_usu"] . " - Estado: " . $fila["estado"] . "<br>";
    }
} else {
    echo "0 resultados";
}

$conexion->close();
?>

