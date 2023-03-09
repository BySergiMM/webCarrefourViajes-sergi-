$(document).ready(function() {
    $('form').submit(function(event) {
      event.preventDefault(); // Evita que se abra una nueva página
      $.ajax({
        type: 'POST', // Método HTTP utilizado para enviar el formulario
        url: $(this).attr('action'), // URL a la que se enviará el formulario
        data: $(this).serialize(), // Datos del formulario a enviar
        success: function(response) {
          // Aquí se manejará la respuesta del servidor
        },
        error: function(xhr, status, error) {
          // Aquí se manejará cualquier error que ocurra durante el envío del formulario
        }
      });
    });
  });