<?php  
   $nombreUsuario = $_SESSION['nombre'];
?>
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left info">
        <p><?php echo $nombreUsuario ?> </p>
        <a href="#"><i class="fas fa-circle text-success"></i> En línea</a>
      </div>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Menú de Administración</li>
      <li class="treeview">
        <a href="#">
        <i class="fas fa-users"></i>
          <span> Usuarios</span>
          <span class="pull-right-container">
            <i class="fas fa-angle-down"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="listar-usuarios.php"><i class="fas fa-th-list" style="margin-right: 8px"></i>Ver Todos</a></li>
          <li><a href="crear-usuarios.php"><i class="fas fa-plus-circle" style="margin-right: 8px"></i>Agregar</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fas fa-camera-retro"></i>
          <span> Productos</span>
          <span class="pull-right-container">
            <i class="fas fa-angle-down"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="listar-productos.php"><i class="fas fa-th-list" style="margin-right: 8px"></i>Ver Todos</a></li>
          <li><a href="crear-productos.php"><i class="fas fa-plus-circle" style="margin-right: 8px"></i>Agregar</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fas fa-book"></i>
          <span> Categorias</span>
          <span class="pull-right-container">
            <i class="fas fa-angle-down"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="listar-categorias.php"><i class="fas fa-th-list" style="margin-right: 8px"></i>Ver Todas</a></li>
          <li><a href="crear-categorias.php"><i class="fas fa-plus-circle" style="margin-right: 8px"></i>Agregar</a></li>
        </ul>
      </li>
  </section>
  <!-- /.sidebar -->
</aside>

<!-- =============================================== -->