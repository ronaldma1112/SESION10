<?php
$servername="localhost";
$username="root";
$password="";
$dbname="data_noche";
//crear la conexion 
$conexion = new mysqli($servername,$username,$password,$dbname);
//comprobar la conexión
if($conexion->connect_error){
 die("Error de Conexion: ". $conexion->connect_error);
}

echo"Conectado Exitosamente";
?>