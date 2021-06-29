<?php
error_reporting(E_ALL ^ E_NOTICE);
/* Crear productos y mandar ifo a la BD */
include_once "functions/funciones.php";
$nombre = $_POST['nombre'];
$url_foto = $_POST['url_foto'];
$categoria = $_POST['categoria'];
$id_registroEditar = $_POST["id_registro"];

if($_POST['registro'] == 'nuevo') {
    $nombre_carpeta = $nombre;
    $directorio = "../../build/portafolio/$nombre_carpeta/";
    if(!is_dir($directorio)) {
        mkdir($directorio, 0755, true);
    }
    if(move_uploaded_file($_FILES['archivo_imagen']['tmp_name'], $directorio . $_FILES['archivo_imagen']['name'])) {
        $imagen_url = $_FILES['archivo_imagen']['name'];
        $imagen_resultado = "Se cargo correctamente";
    } else {
        $respuesta = array(
            'respuesta' => error_get_last()
        );
    }
    try {
        include_once "functions/funciones.php";
        $stmt = $con->prepare("INSERT INTO imagenes (nombre, url_foto, id_categoria) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $nombre, $imagen_url, $categoria);
        $stmt->execute();
        $id_insertado = $stmt->insert_id;
        if ($stmt->affected_rows){
            $respuesta=array(
                'respuesta'=>'exito',
                'id_producto'=>$id_insertado,
                'resultado_imagen' => $imagen_resultado
            );
        }else{
            $respuesta=array(
                'respuesta'=>'Error'
            );
        }
        $stmt->close();
        $con->close();
    } catch (Exception $e) {
        echo "Error: ".$e->getMessage();
    }
    die(json_encode($respuesta));
}


/*Actualizar Registro de la imagen del portafolio */
if($_POST['registro'] == 'actualizar') {
    $nombre_carpeta = $nombre;
    $directorio = "../../build/portafolio/$nombre_carpeta/";
    if(!is_dir($directorio)) {
        mkdir($directorio, 0755, true);
    }
    if(move_uploaded_file($_FILES['archivo_imagen']['tmp_name'], $directorio . $_FILES['archivo_imagen']['name'])) {
        $imagen_url = $_FILES['archivo_imagen']['name'];
        $imagen_resultado = "Se cargo correctamente";
    } else {
        $respuesta = array(
            'respuesta' => error_get_last()
        );
    }
    try {
        if($_FILES['archivo_imagen']['size'] > 0) {
            //Con imagen
            $stmt = $con->prepare('UPDATE imagenes SET nombre = ?, url_foto = ? WHERE id_imagenes = ? ');
            $stmt->bind_param("ssi", $nombre, $imagen_url, $id_registroEditar);
        } else {
            //Sin imagen
            $stmt = $con->prepare("UPDATE imagenes SET nombre = ? WHERE id_imagenes = ?");
            $stmt->bind_param("s", $nombre, $id_registroEditar);
        }
        $estado = $stmt->execute();
        if($estado == true) {
            $respuesta = array(
                'respuesta' => 'actualizar',
                'actualizar' => $id_registroEditar
            );
        } else {
            $respuesta + array(
                'respuesta' => 'error'
            );
        }
        $stmt->close();
        $con->close();
    } catch (Exception $e) {
        $respuesta = array(
            'respuesta' => $e->getMessage()
        );
    }
    die(json_encode($respuesta));
}

/*Eliminar imagenes */
if($_POST['registro'] == 'eliminar') { 
    $id_borrar = $_POST['id'];
    try {
        $stmt = $con->prepare("DELETE FROM imagenes WHERE id_imagenes = ?");
        $stmt->bind_param('i', $id_borrar);
        $stmt->execute();
        if($stmt->affected_rows) {
            $respuesta = array(
                'respuesta' => 'exito',
                'id_eliminado' => $id_borrar
            );
        } else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
    } catch (Exception $e) {
        $respuesta = array(
            'respuesta' => $e->getMessage()
        );
    }
    die(json_encode($respuesta));
}