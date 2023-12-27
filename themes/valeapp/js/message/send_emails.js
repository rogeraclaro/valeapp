// jQuery(document).ready(function ($) {
//   $('#send-email').on('submit', function (e) {
//     e.preventDefault();


//     // $.ajax({
//     //   data: {
//     //     action: 'send_email_provider',
//     //   },
//     //   success: function (response) {
//     //     $('#resultado').html(response);
//     //   },
//     //   error: function (error) {
//     //     alert(error);
//     //   }
//     // });
//   });
// });


jQuery(document).ready(function ($) {
  $('#send-email').click(function () {
    // Realizar la solicitud Ajax
    $.ajax({
      url: ajax_object.ajax_url, // No es necesario pasar la URL ya que WordPress proporciona la variable global ajaxurl
      type: 'POST',
      data: {
        action: 'obtener_datos_usuario_actual', // Nombre de la función PHP que se ejecutará
      },
      dataType: 'json', // Especificar que esperamos una respuesta JSON
      success: function (response) {
        // Verificar si la respuesta contiene el indicador de éxito
        if (response.success) {
          // Mostrar la alerta con el mensaje y los datos del usuario
          alert('¡Datos del usuario obtenidos con éxito!\nNombre: ' + response.nombre + '\nCorreo: ' + response.correo);
        } else {
          // Mostrar una alerta de error si la ejecución no fue exitosa
          alert('Error al procesar la solicitud: ' + response.mensaje);
        }
      },
      error: function (error) {
        console.log(error);
      }
    });
  });
});