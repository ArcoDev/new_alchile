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
      Productos black wolf
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
                $sql ="SELECT * FROM `categorias` WHERE `id_cat` = $id";
                $resultado = $con->query($sql);
                $categoria = $resultado->fetch_assoc();
             ?>
            <!-- form start -->
            <form role="form" name="guardar-categoria" id="guardar-categoria" method="post" action="modelo-categorias.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="foto">URL de la foto</label>
                  <input autocomplete="off" type="text" class="form-control" id="foto" name="nombre"
                  placeholder="Ingresa el nombre de la categoria, ejemplo: pulseras" value="<?php echo $categoria['nombre'] ?>">
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