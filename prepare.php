<?php
include("conexion.php");


$stmt = $conexion->prepare("INSERT INTO t_usuario (nombre_usu, password_usu, estado) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $nombre_usu, $password_usu, $estado);

$nombre_usu = "Jonás";
$password_usu = "JonasTorres";
$estado = 0;
$stmt->execute();

$nombre_usu = "Maria";
$password_usu = "MariaMorales";
$estado = 1;
$stmt->execute();

$nombre_usu = "Julia";
$password_usu = "JDominguez";
$estado = 1;
$stmt->execute();

echo "Nuevos registros creados exitosamente";

$stmt->close();
$conexion->close();
?>
    