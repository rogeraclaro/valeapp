    // Variables globales
    let selectedIds = [];

    // Función que se ejecuta cuando cambia el estado de un checkbox
    $('.EliminarCuenta-input').change(function() {
      // Actualiza el contador y captura los IDs seleccionados
      updateSelection();
    });

    // Función para actualizar el contador y los IDs seleccionados
    function updateSelection() {
      let selectedCount = 0;
      selectedIds = [];

      // Recorre todos los checkboxes
      $('.EliminarCuenta-input').each(function() {
        // Verifica si el checkbox está seleccionado
        if ($(this).prop('checked')) {
          // Incrementa el contador y agrega el ID a la lista
          selectedCount++;
          selectedIds.push($(this).attr('id'));
        }
      });

      // Actualiza el contador
      $('#selectedCount').text(selectedCount);
    }

    // Función que se ejecuta al hacer clic en el botón "Confirmar"
    $('#ConfirmDelete').click(function() {
      // Muestra los IDs seleccionados en la consola
      console.log('IDs seleccionados:', selectedIds);

      // También podrías realizar otras acciones aquí con los IDs seleccionados
    });