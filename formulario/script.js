$(document).ready(function(){
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

});