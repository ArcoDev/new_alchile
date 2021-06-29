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
      Lista de imagenes
      <small>registrados en la base de datos de alchile studio</small>
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
                  <th>Nombre</th>
                  <th>Foto</th>
                  <th>Categoria</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    try {
                      $sql = "SELECT * 
                              FROM imagenes img
                              INNER JOIN portafolio por
                              ON img.id_categoria = por.id_cat";
                      $resultado = $con->query($sql);
                    } catch (Exception $e) {
                      $error = $e->getMessage();
                      echo $error;
                    }
                    
                    while ($imagenes = $resultado->fetch_assoc()) { ?>
                <tr>
                  <td><?php echo $imagenes['nombre'] ?></td>
                  <td>
                    <center>
                      <img loading="lazy" src="../../build/portafolio/<?php echo $imagenes['nombre']; ?>/<?php echo $imagenes['url_foto']; ?>" alt="Portafolio de alchile studio" width="200" height="100">
                    </center>
                  </td>
                  <td><?php echo $imagenes['nombre_portafolio'] ?></td>
                  <td>
                    <a href="editar-imagenes.php?id=<?php echo $imagenes['id_imagenes'] ?>"
                      class="btn btn-warning btn-flat margin" title="Editar">
                      <i class="fas fa-pencil-alt"></i>
                    </a>
                    <a href="#" data-id="<?php echo $imagenes['id_imagenes'] ?>" data-tipo="imagenes"
                      class="btn btn-danger btn-flat margin borrar_registro" title="Eliminar">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
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