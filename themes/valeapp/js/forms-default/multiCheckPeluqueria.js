$(document).ready(function () {
    var selectedOptions = [];

    // Habilitar o deshabilitar el botón de la primera modal según las selecciones
    $('.peluqueria-item input').on('change', function () {
        selectedOptions = $('.peluqueria-item input:checked').not('[data-tipo="todos"]').map(function () {
            return $(this).data('tipo');
        }).get();
        var selectedCount = selectedOptions.length;
        $('#contador').text('Opciones seleccionadas: ' + selectedCount);
        $('#btnSubmit').prop('disabled', selectedCount === 0);
    });

    // Marcar todas las opciones al seleccionar "Todos"
    $('[data-peluqueria-selectAll="true"]').on('change', function () {
        var isChecked = $(this).prop('checked');
        $('.peluqueria-item input').prop('checked', isChecked).trigger('change');
    });

    // Capturar las opciones seleccionadas en la primera modal
    $('#btnSubmit').on('click', function () {
        console.log('Opciones seleccionadas en la primera modal:', selectedOptions);
    });

    // Habilitar o deshabilitar el botón de la segunda modal según las selecciones
    $('.gender-item input').on('change', function () {
        $('#btnSubmitGender').prop('disabled', !$('.gender-item input:checked').length);
    });

    // Capturar el género seleccionado en la segunda modal
    $('#btnSubmitGender').on('click', function () {
        var selectedGender = $('.gender-item input:checked').data('tipo');
        console.log('Género seleccionado en la segunda modal:', selectedGender);
    });
});