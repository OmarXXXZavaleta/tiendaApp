<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>¿Que desea hacer?</title>

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
      <h1 class="display-3">¿Que desea hacer?</h1>

    </header>
    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="img/abarrotes.png" alt="">
          <div class="card-body">
            <h4 class="card-title">A,B,C de Productos</h4>
            <p class="card-text">Alta,Bajas y Cambios de Productos</p>
          </div>
          <div class="card-footer">
            <a href="abcProductos/abcProducto.php" class="btn btn-primary">Click!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="img/abarrotes.png" alt="">
          <div class="card-body">
            <h4 class="card-title">A,B,C de Categorias</h4>
            <p class="card-text">Alta,Bajas y Cambios de Categorias</p>
          </div>
          <div class="card-footer">
            <a href="abcCategorias/abcCategoria.php" class="btn btn-primary">Click!</a>
          </div>
        </div>
      </div>
    <!-- /.row -->

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
