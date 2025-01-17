<?php
// var_dump($_POST);
// Verificar que los datos fueron enviados
// isset(): Comprueba si las variables numero1 y numero2 existen en el arreglo $_POST y no son null.
if (isset($_POST['numero1']) && isset($_POST['numero2'])){
    // Obtendremos los números enviados
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    if(is_numeric($numero1) && is_numeric($numero2)){
        // si es igual Realizar la suma
        $resultado = $numero1 + $numero2;

        echo"El resultado de la suma es : $resultado";
    }else{
        // En caso de que los datos no sean numeros 
        echo "Por favor, ingrese números validos";
    }
}else {
    // Si no existen los datos
    echo "No se recibieron los datos necesarios para hacer la operación.";
}



?>