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
      Lista de imagnes
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
                  <th>Precio</th>
                  <th>Categoria</th>
                  <th>Foto</th>
                  <th>URL Mercado Libre</th>
                  <th>URL Amazon</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    try {
                      $sql = "SELECT id_pro, nombre, precio, nombre_cat, url_foto, url_mercado_libre, url_amazon FROM productos";
                      $resultado = $con->query($sql);
                    } catch (Exception $e) {
                      $error = $e->getMessage();
                      echo $error;
                    }
                    while ($producto = $resultado->fetch_assoc()) {?>
                <tr>
                  <td><?php echo $producto['nombre'] ?></td>
                  <td><?php echo $producto['precio'] ?></td>
                  <td><?php echo $producto['nombre_cat'] ?></td>
                  <td>
                    <center><img loading="lazy" src="../../assets/images/<?php echo $producto['url_foto']; ?>"
                        alt="Productos del catalo de amora" width="200" height="100"></center>
                  </td>
                  <td><?php echo $producto['url_mercado_libre'] ?></td>
                  <td><?php echo $producto['url_amazon'] ?></td>
                  <td>
                    <a href="editar-productos.php?id=<?php echo $producto['id_pro']?>"
                      class="btn btn-warning btn-flat margin" title="Editar">
                      <i class="fas fa-pencil-alt"></i>
                    </a>
                    <a href="#" data-id="<?php echo $producto['id_pro']?>" data-tipo="productos"
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