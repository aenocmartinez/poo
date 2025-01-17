<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registro";

$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}
echo'conexion exitosa';

$query = "SELECT nombre, email FROM `form-registro`";
$resultado = $conexion->query($query);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>{$fila['nombre']}</td>
                <td>{$fila['email']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='2'>No hay datos disponibles.</td></tr>";
}

$conexion->close();
?>
