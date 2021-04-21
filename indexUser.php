<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bienvenido</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <?php
    include("menu.php");
    //include("fragmentos/menu.php")
    $m1 = new menu();
    $m1 ->mostrarMenuAdmin();
    ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">Bienvenido Administrador</h1>
      <p class="lead"></p>
      <a href="abc.php" class="btn btn-primary btn-lg">Altas, Bajas y Cambios</a>
    </header>

    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="img/abarrotes.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Listar Productos</h4>
            <p class="card-text">Podras listar todos los productos que se encuentren en tu tienda.</p>
          </div>
          <div class="card-footer">
            <a href="abcProductos/listarProducto.php" class="btn btn-primary">Click para ver inventario!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="img/lacteos.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Listar Categorias</h4>
            <p class="card-text">Podras listar todas las categorias que se encuentren de tu tienda.</p>
          </div>
          <div class="card-footer">
            <a href="abcCategorias/listarCategoria.php" class="btn btn-primary">Click para ver categorias!</a>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php
    include("pie.php");
    //include("fragmentos/menu.php")
    $p1 = new pie();
    $p1 ->piePagina();
    ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
