$(document).ready(function () {
    /* Crear un usuario y mandar info a la BD */
    $('#guardar-categoria').on('submit', function (e) {
        e.preventDefault();
        //lo que hace serializeArray() es iterar en todo los campos y nos crea unos objetos con los datos
        var datos = $(this).serializeArray();
        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function (data) {
                console.log(data);
                var resultado = data;
                if (resultado.respuesta === 'exito') {
                    swal(
                        'La categoria!',
                        'Se agrego correctamente.',
                        'success'
                    );
                } else {
                    swal(
                        'Ooops!',
                        'No se puede cargar correctamnte el producto',
                        'error'
                    );
                }
                if (resultado.respuesta === 'actualizar') {
                    swal(
                        'La categoría!',
                        'Se edito correctamente.',
                        'success'
                    );

                }
            }
        });
    });
   /* Eliminar registro */
   $('.borrar_registro').on('click', function(e) {
    e.preventDefault();
    var id = $(this).attr('data-id');
    var portafolio = $(this).attr('data-tipo');
    swal({
        title: 'Estas seguro?',
        text: "Esta acción no se puede revertir!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si! Eliminar',
        cancelButtonText: 'Cancelar'

    }).then(function(result) {
        if (result.value) {
            $.ajax({
                type: 'post',
                data: {
                    'id': id,
                    'registro': 'eliminar'
                },

                url: 'modelo-' + portafolio + '.php',
                success: function(data) {
                    var resultado = JSON.parse(data);
                    if (resultado.respuesta == 'exito') {
                        swal(
                            'Eliminada!',
                            'categoria eliminada',
                            'success'
                        );
                        jQuery("[data-id='" + resultado.id_eliminado + "'").parents('tr').remove();
                    } else {
                        swal(
                            'Error!',
                            'No se pudo eliminar, intente de nuevo.',
                            'error'
                        );

                    }
                }
            });
        }
    });

});
});