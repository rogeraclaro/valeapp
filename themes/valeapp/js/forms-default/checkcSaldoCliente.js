$(document).ready(function() {
    $('.miSaldoProveedor-item input[type="checkbox"]').change(function() {
      $('.miSaldoProveedor-item input[type="checkbox"]').not(this).prop('checked', false);
            $('.miSaldoProveedor-item').removeClass('selected');
      $(this).closest('.miSaldoProveedor-item').addClass('selected');
    });
  });
  