$(document).ready(function(){
// Detectar el envío del formulario
    $("#formSuma").submit(function (event){
        // Prevenir la recarga de la página
        event.preventDefault();
        // event.preventDefault(): Evita que el formulario realice su comportamiento predeterminado, que sería recargar la página al enviarse.

        // obtener los valos ingresados en los campos de mi form
        var numero1 = $("#numero1").val();
        var numero2 = $("#numero2").val();

        // $("#numero1").val(): Obtiene el valor ingresado en el campo de entrada con el atributo id="numero1".

        // Enviar los datos al servidor con AJAX
        $.ajax({
            url: "procesar.php",
            method: "POST",
            data: {numero1: numero1, numero2: numero2},
            // succes se ejecutará si la solicitud del servidor fue exitosa
            success: function(respuesta){
                $("#resultado").html(respuesta);
            },
            error: function(){
                $("#resultado").html("ocurrio un error al procesar la solicitud.");
            }
        });





    })

});