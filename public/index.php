<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Samyr</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <form id="salarioForm">
        <label for="input_salario_minimo">Salario Mínimo</label>
        <input type="number" min="0" name="input_salario_minimo" id="input_salario_minimo" value="1300000">
        <button type="button" id="enviarBtn">Calcular Valor Salud</button>
    </form>

    <!-- Etiqueta para mostrar el resultado -->
    <p id="resultado"></p>

    <script>
        $(document).ready(function () {
            $('#enviarBtn').click(function () {
                const salarioMinimo = $('#input_salario_minimo').val();
                const resultado = $('#resultado');

                // Realizar la solicitud AJAX con jQuery
                $.ajax({
                    url: 'server.php', // URL del archivo PHP
                    method: 'POST', // Método HTTP
                    data: {
                        input_salario_minimo: salarioMinimo
                    },
                    success: function (response) {
                        // Mostrar la respuesta del servidor en el <p id="resultado">
                        resultado.html(response);
                    },
                    error: function (xhr, status, error) {
                        console.error('Error:', error);
                        resultado.text('Ocurrió un error al procesar la solicitud.');
                    }
                });
            });
        });
    </script>
</body>
</html>
