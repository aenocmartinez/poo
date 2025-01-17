<?php

require_once __DIR__ . '/../vendor/autoload.php';

if ( isset($_GET['valorSalud'])) {0
    echo "<p>VALOR SALUD: " . $_GET['valorSalud'] . "</p>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Samyr</title>
</head>
<body>
    
    <form action="server.php" method="post">
        <label for="SalarioMinimo">Salario Minimo</label>
        <input type="number" min="0" name="input_salario_minimo" id="input_salario_minimo" value="1300000">
        <input type="submit" value="Enviar">
    </form>


</body>
</html>