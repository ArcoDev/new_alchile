<?php
/* AGregado los tempaltes de la plantilla */
  include_once "functions/sesiones.php";
  include_once "functions/funciones.php";
  $id = $_GET['id'];
  if(!filter_var($id, FILTER_VALIDATE_INT)) {
    die("Error");
  }
  include_once "templates/header.php";
  include_once "templates/barra.php";
  include_once "templates/navegacionLateral.php"; 

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Usuarios black wolf
    </h1>
  </section>

  <div class="row">
    <div class="col-md-8">
      <!-- Main content -->
      <section class="content">
        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Editar Usuario</h3>
          </div>
          <div class="box-body">
            <?php
                $sql ="SELECT * FROM `usuarios` WHERE `id_usr` = $id";
                $resultado = $con->query($sql);
                $usuario = $resultado->fetch_assoc();
             ?>
            <!-- form start -->
            <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-usuario.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="correo">Correo Electronico</label>
                  <input autocomplete="off" type="email" class="form-control" id="correo" name="correo"
                    placeholder="Ingresa tu correo" value="<?php echo $usuario['correo'] ?>">
                </div>
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input autocomplete="off" type="text" class="form-control" id="nombre" name="nombre"
                    placeholder="Ingresa tu nombre completo" value="<?php echo $usuario['nombre'] ?>">
                </div>
                <div class="form-group">
                  <label for="password">Contrasena</label>
                  <input autocomplete="off" type="password" class="form-control" id="password" name="contrasena" placeholder="Contrasena para iniciar sesion" >
                </div>
                <div class="box-footer">
                <input type="hidden" name="registro" value="actualizar">
                <input type="hidden" name="id_registro" value="<?php echo $id?>">
                  <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
  </div>
</div>
<!-- /.content-wrapper -->

<?php
/* AGregado los tempaltes de la plantilla */
  include_once "templates/footer.php";

?>