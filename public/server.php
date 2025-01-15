<?php
// Permitir acceso desde cualquier origen
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Procesar la solicitud
if (isset($_POST['input_salario_minimo'])) {
    $valorSalud = $_POST['input_salario_minimo'] * (12 / 100);
    echo "VALOR SALUD: " . htmlspecialchars($valorSalud);
}
?>
