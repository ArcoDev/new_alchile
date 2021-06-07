<?php
error_reporting(E_ALL ^ E_NOTICE);
/* Crear productos y mandar ifo a la BD */
include_once "functions/funciones.php";
$nombre = $_POST['nombre'];

if($_POST['registro'] == 'nuevo') {
    try {
        include_once "functions/funciones.php";
        $stmt = $con->prepare("INSERT INTO categorias (nombre) VALUES (?)");
        $stmt->bind_param("s", $nombre);
        $stmt->execute();
        $id_registro=$stmt->insert_id;
        if ($id_registro > 0){
            $respuesta=array(
                'respuesta'=>'exito',
                'id_categoria'=>$id_registro
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
/*Actualizar Registro de usuario */
if($_POST['registro'] == 'actualizar') {
    
    try {
        if (empty($_POST['nombre'])) {
            $stmt = $con->prepare("UPDATE categorias SET nombre =?, editado = NOW() WHERE id_cat =?");
            $stmt->bind_param("si", $nombre, $id_registroEditar);
        } else {
            $id_registroEditar = $_POST["id_registro"];
            $stmt = $con->prepare("UPDATE categorias SET nombre = ?, editado = NOW() WHERE id_cat = ?");
            $stmt->bind_param("si", $nombre, $id_registroEditar);
        }
        $stmt->execute();
        if($stmt->affected_rows) {
            $respuesta = array(
                'respuesta' => 'actualizar',
                'actualizar' => $stmt->insert_id
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

/*Eliminar usuario */
if($_POST['registro'] == 'eliminar') { 
    $id_borrar = $_POST['id'];
    try {
        $stmt = $con->prepare("DELETE FROM categorias WHERE id_cat = ?");
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