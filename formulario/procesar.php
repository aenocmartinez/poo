<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registro";

$conexion = new mysqli($servername, $username, $password, $dbname);

if ($conexion->connect_error){
    die('Error de conexión: ' . $conexion->connect_error);
}
echo'Conexion exitosa';


if ($_SERVER['REQUEST_METHOD']==='POST'){//Indica que el metodo para el enviar el archivo debe ser POST

    // CAPTURAMOS LOS VALORES DEL FORM
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];


    // Verificamos que los campos no estén vacios
    if (!empty($nombre) && !empty($email)){
        $stmt = $conexion->prepare("INSERT INTO `form-registro` (nombre,email) VALUES (?, ?");// Consulta para prevenir ataques de inyeccion SQL
        // INSERT INTO: Especifica que queremos insertar datos en la tabla form-registro.
        // ?: Marcadores de posición para los valores que se insertarán.

        $stmt->bind_param('ss' , $nombre, $email);
        // bind_param(): Vincula los valores a los marcadores de posición (?) en la consulta SQL

        if($stmt->execute()){// $stmt->execute(): Ejecuta la consulta SQL preparada.
            echo"Datos guardados correctamente."; 
        }else {
            echo "Error al guardar los datos. ";
        }

        $stmt->close();
    }else {
        echo "Por favor, completa todos los campos.";
    }
}

$conexion->close();




?>