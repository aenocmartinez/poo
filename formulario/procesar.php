<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registro";

$conexion = new mysli($servername, $username, $password, $dbname);

if ($conexion->connect_error){
    die('Error de conexión: ' . $conexion->connect_error);
}
echo'Conexion exitosa';

?>