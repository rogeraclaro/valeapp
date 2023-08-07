jQuery(document).ready(function ($) {
  $('#form_providers').on('submit', function (e) {
    e.preventDefault();

    var data = {
      action: 'front_providers_save_metaboxes',
      datos_formulario: $(this).serialize(),
    };

    $.post(ajax_object.ajax_url, data, function (response) {
      if (response.success) {
        alert('Datos registrados correctamente');
        $(location).attr('href', '/?page_id=100');
      } else {
        alert('Error al guardar los datos');
      }
    });
  });
});
