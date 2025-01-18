/*$(document).ready(function(){
    // Evento para enviar el formulario
    $('#formulario').submit(function(e){
        e.preventDefault();

        // capturar los datos del formulario
        const datos = obtenerDatosFormulario();

        // Agregar una fila a la tabla con los datos
        agregarFilaTabla(datos);

        // Limpiar el formulario despues de procesar los datos
        limpiarFormulario('#formulario');
    });

    // Función para obtener los datos del formulario
    function obtenerDatosFormulario(){
        return{
            nombre: $('#nombre').val(),
            email: $('#email').val()
        };
    }

    // función para agregar una fila a la tabla
    function agregarFilaTabla(datos){
        const nuevaFila = `
        <tr>
        <td>${datos.nombre}</td>
        <td>${datos.email}</td>
        </tr>
        `;
        $('#tablaResultado tbody').append(nuevaFila);
    }

    // Función para limpiar el formulario
    function limpiarFormulario(formulario){
        $(formulario)[0].reset();
    }

});*/

$(document).ready(function(){
    // Creo evento para enviar el formulario
    $("#formulario").submit(function(e){
        e.preventDefault();

        // capturo los datos
        const datos ={
            nombre:$('#nombre').val(),
            email:$('#email').val()
        };

        // Envio los datos del form con AJAX
        $.ajax({
            url:'procesar.php',
            method: 'POST',
            data: datos,
            // succes se ejecutará si la solicitud del servidor fue exitosa
            success: function(response){
                console.log(response);// Verificar la respuesta del servidor, response: Contiene la respuesta del servidor (por ejemplo, "Datos guardados correctamente").
                cargarDatos();// Cargar datos actualizados en la tabla
                limpiarFormulario('#formulario');// Limpiar el formulario
            },
            error: function(){
                alert('Error al procesar la solicitud.');
            }
        });

    });

    // función para cargar los datos desde la base de datos
    function cargarDatos(){
        $.ajax({
            url:'cargar.php',
            method:'POST',
            success: function(response){// response: Contiene las filas en formato HTML generadas por cargar.php.
                $('#tablaResultado tbody').html(response);//Actualizar la tabla
            },
            error: function(){
                alert('Error al cargar los datos');
            }
        });
    }

    // Función limpiar el formulario
    
    

    cargarDatos();
});


