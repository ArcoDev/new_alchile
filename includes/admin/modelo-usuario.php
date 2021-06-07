<?php
error_reporting(E_ALL ^ E_NOTICE);
/* Crear usuarios y mandar ifo a la BD */
include_once "functions/funciones.php";
$correo = $_POST["correo"];
$nombre = $_POST["nombre"];
$contrasena = $_POST["contrasena"];

if($_POST['registro'] == 'nuevo') {
    $opciones = array(
        'cost' => 12
    );
    $contra_hashed = password_hash($contrasena, PASSWORD_BCRYPT, $opciones);
    
    try {
        include_once "functions/funciones.php";
        $stmt = $con->prepare("INSERT INTO usuarios (correo, nombre, contrasena) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $correo,$nombre,$contra_hashed);
        $stmt->execute();
        $id_registro=$stmt->insert_id;
        if ($id_registro > 0){
            $respuesta=array(
                'respuesta'=>'exito',
                'id_usuario'=>$id_registro
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
        if (empty($_POST['contrasena'])) {
            $stmt = $con->prepare("UPDATE usuarios set correo =?, nombre = ?, editado = NOW() WHERE id_usr =?");
            $stmt->bind_param("ssi", $correo, $nombre, $id_registroEditar);
        } else {
            $opciones2 = array(
                'cost' => 12
            );
            $id_registroEditar = $_POST["id_registro"];
            $hash_contra = password_hash($contrasena, PASSWORD_BCRYPT, $opciones2); 
            $stmt = $con->prepare("UPDATE usuarios SET correo = ?, nombre = ?, contrasena = ?, editado = NOW() WHERE id_usr = ?");
            $stmt->bind_param("sssi", $correo, $nombre, $hash_contra, $id_registroEditar);
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
        $stmt = $con->prepare("DELETE FROM usuarios WHERE id_usr = ?");
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

/* Login para igresar al sistema */
if(isset($_POST["login-usuario"])) {
    $correoUsr = $_POST['correo'];
    $contrasenaUsr = $_POST['contrasena'];
    try {
        include_once "functions/funciones.php";
        $stmt = $con->prepare("SELECT * FROM usuarios where correo = ?;");
        $stmt->bind_param("s", $correoUsr);
        $stmt->execute();
        $stmt->bind_result($id_usr, $correo_usr, $nombre_usr, $contrasena_usr, $editado);
        if($stmt->affected_rows) {
             $existe = $stmt->fetch();
            if($existe) {
                /*if(password_verify($contrasenaUsr, $contrasena_usr)){
                    $respuesta = array(
                        'respuesta' => 'exitoso',
                        'usuario' => $nombre_usr
                            
                    );
                } else {
                    $respuesta = array(
                        'respuesta' => 'fallo'
                    );
                }
                checar video  753 y 754
                 */
                session_start();
                $_SESSION['usuario'] =  $correo_usr;
                $_SESSION['nombre'] = $nombre_usr;
                $respuesta = array(
                    'respuesta' => 'si_existe',
                    'usuario' => $nombre_usr
                );
            } else {
                $respuesta = array(
                    'respuesta' => 'no_existe'
                );
            }
        }
        $stmt->close();
        $con->close();
    } catch (Exception $e) {
        echo "Error: ".$e->getMessage();
    }
    die(json_encode($respuesta));
}