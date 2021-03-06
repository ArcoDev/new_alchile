$(document).ready(function() {
    /* Crear un usuario y mandar info a la BD */
    $('#guardar-producto-archivo').on('submit', function(e) {
        e.preventDefault();
        var datos = new FormData(this);
        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            contentType: false,
            processData: false,
            async: true,
            cache: false,
            beforeSend: function() {
                $('#loader').show();
            },
            success: function(data) {
                console.log(data);
                var resultado = data;
                if (resultado.respuesta === 'exito') {
                    swal(
                        'La imagen',
                        'Se agrego correctamente!',
                        'success'
                    );
                    $('#loader').hide();
                    $('#guardar-producto-archivo')[0].reset();
                } else {
                    swal(
                        'Ooops!',
                        'No se puede cargar la imagen',
                        'error'
                    );
                }
                if (resultado.respuesta === 'actualizar') {
                    swal(
                        'La imagen',
                        'Se edito correctamente!',
                        'success'
                    );
                    $('#loader').hide();
                    $('#guardar-producto-archivo')[0].reset();
                }
            }
        });
    });
    /* Eliminar registro */
    $('.borrar_registro').on('click', function(e) {
        e.preventDefault();
        var id = $(this).attr('data-id');
        var imagenes = $(this).attr('data-tipo');
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

                    url: 'modelo-' + imagenes + '.php',
                    success: function(data) {
                        var resultado = JSON.parse(data);
                        if (resultado.respuesta == 'exito') {
                            swal(
                                'Eliminado!',
                                'imgen eliminada',
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