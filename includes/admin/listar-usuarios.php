<?php
/* AGregado los tempaltes de la plantilla */
  include_once "functions/sesiones.php";
  include_once "functions/funciones.php";
  include_once "templates/header.php";
  include_once "templates/barra.php";
  include_once "templates/navegacionLateral.php"; 

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Lista de usuarios
      <small>registrados en la base de datos de black wolf</small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
          <!--<h3 class="box-title">Maneja los usuarios en esta seccion</h3>-->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="registros" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Correo</th>
                  <th>Nombre</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    try {
                      $sql = "SELECT id_usr, correo, nombre FROM usuarios";
                      $resultado = $con->query($sql);
                    } catch (Exception $e) {
                      $error = $e->getMessage();
                      echo $error;
                    }
                    while ($usuario = $resultado->fetch_assoc()) {?>
                <tr>
                  <td><?php echo $usuario['correo'] ?></td>
                  <td><?php echo $usuario['nombre'] ?></td>
                  <td>
                    <a href="editar-usuario.php?id=<?php echo $usuario['id_usr']?>"
                      class="btn btn-warning btn-flat margin" title="Editar">
                      <i class="fas fa-pencil-alt"></i>
                    </a>
                    <a href="#" data-id="<?php echo $usuario['id_usr']?>" data-tipo="usuario"
                      class="btn btn-danger btn-flat margin borrar_registro" title="Eliminar">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>Correo</th>
                  <th>Nombre</th>
                  <th>Acciones</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
/* AGregado los tempaltes de la plantilla */
  include_once "templates/footer.php";

?>