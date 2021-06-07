$(document).ready(function() {
    /* Crear un usuario y mandar info a la BD */
    $('#guardar-registro').on('submit', function(e) {
        e.preventDefault();
        //lo que hace serializeArray() es iterar en todo los campos y nos crea unos objetos con los datos
        var datos = $(this).serializeArray();
        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data) {
                console.log(data);
                var resultado = data;
                if (resultado.respuesta === 'exito') {
                    swal(
                        'El usuario!',
                        'Se agrego correctamente.',
                        'success'
                    );
                } else {
                    swal(
                        'Ooops!',
                        'No se puede crear un usuario con el mismo correo electronico.',
                        'error'
                    );
                }
                if (resultado.respuesta === 'actualizar') {
                    swal(
                        'El usuario!',
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
        var tipo = $(this).attr('data-tipo');
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
            console.log(result);
            if (result.value) {
                //console.log("ID:" + id);

                $.ajax({
                    type: 'post',
                    data: {
                        'id': id,
                        'registro': 'eliminar'
                    },

                    url: 'modelo-' + tipo + '.php',
                    success: function(data) {
                        //  console.log(data);
                        var resultado = JSON.parse(data);
                        console.log(resultado);
                        if (resultado.respuesta == 'exito') {
                            swal(
                                'Eliminado!',
                                'Registro eliminado',
                                'success'
                            )
                            jQuery("[data-id='" + resultado.id_eliminado + "'").parents('tr').remove();
                        } else {
                            swal(
                                'Error!',
                                'No se pudo eliminar, intente de nuevo.',
                                'error'
                            )

                        }
                    }
                });
            }
        });

    });

    /* Igresar a; sistema de backend mediante el login */
    $('#login-usuario').on('submit', function(e) {
        e.preventDefault();
        //lo que hace serializeArray() es iterar en todo los campos y nos crea unos objetos con los datos
        var datos = $(this).serializeArray();
        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data) {
                var resultado = data;
                if (resultado.respuesta === 'si_existe') {
                    swal(
                        'Login Correcto!',
                        'Bienvenid@ ' + resultado.usuario + '!!!',
                        'success'
                    )
                    setTimeout(function() {
                        window.location.href = 'adminAlchile.php';
                    }, 1000);
                } else {
                    swal(
                        'Ooops!',
                        'Usuario o contrasena incorrectos',
                        'error'
                    )
                }
            }
        });
    });
});