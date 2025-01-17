<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Capturar</title>
</head>
<body>
    <div class="div-form">
        <form action="" id="formulario">
            <label for="nombre">Nombre: </label>
            <br>
            <input type="text" id="nombre" name="email" placeholder="Nombre" required>
            <br>

            <label for="email">Email: </label>
            <br>
            <input type="email" id="email" name="email" placeholder="Email" required>
            <br>

            <button type="submit">Agregar</button>
        </form>
    </div>

    <div class="table">
        <h2> Información capturada</h2>
        <table id="tablaResultado">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                </tr>
            </thead>

            <tbody>

            </tbody>
        </table>
    </div>

    <script src="script.js"></script>
</body>
</html>