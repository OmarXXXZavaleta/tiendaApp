<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Listar Productos</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <!--<link href="C:/xampp/htdocs/dashboard/conexionTienda/css/shop-homepage.css" rel="stylesheet">-->
  <link href="../css/shop-homepage.css" rel="stylesheet">
</head>

<body>

  <!-- Navigation -->
  <?php
    include("../menu.php");
    //include("fragmentos/menu.php")
    $m1 = new menu();
    $m1 ->mostrarMAC();
    ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">ABC en los Productos</h1>

    </header>
    <!-- Page Features -->
    <div class="row text-center">

      <?php
      include("categoria.php");
      $opcion=$_REQUEST['opcion'];

      $categoria1=new Categoria();
      $categoria1->conexion();
      

      switch($opcion)
      {
      case 'insertar':

      $nombrecategoria=$_REQUEST['nombrecategoria'];
      $categoria1->inicializar($nombrecategoria);
      $categoria1->insertar();
      break;

      case 'listar':
      $categoria1->ListarCategorias();
      break;

      case 'eliminar':
      $nombrecategoria=$_REQUEST['nombrecategoria'];
      $categoria1->eliminarCategoria($nombrecategoria);
      break;

      case 'consultar':
      $nombrecategoria=$_REQUEST['nombrecategoria'];
      $categoria1->consultarCategoria($nombrecategoria);
      break;
    }
    $categoria1->cerrar();
    ?>
    <!-- /.row -->

  </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php
    include("../pie.php");
    //include("fragmentos/menu.php")
    $p1 = new pie();
    $p1 ->piePagina();
    ?>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
