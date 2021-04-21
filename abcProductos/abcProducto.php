<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>¿Que desea hacer?</title>

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
    $m1 ->mostrarMAP();
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
          <img class="card-img-top" src="../img/abarrotes.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Alta de productos</h4>
            <p class="card-text">Podras subir nuevos productos a la base de datos.</p>
          </div>
          <div class="card-footer">
            <a href="altaProducto.php" class="btn btn-primary">Click para dar de Alta productos!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="../img/abarrotes.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Baja de Productos</h4>
            <p class="card-text">Podras dar de baja productos de la base de datos.</p>
          </div>
          <div class="card-footer">
            <a href="bajaProducto.php" class="btn btn-primary">Click para dar de baja productos!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="../img/abarrotes.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Cambios en los Productos</h4>
            <p class="card-text">Podras hacer cambios en los productos de la base de datos.</p>
          </div>
          <div class="card-footer">
            <a href="cambioProducto.php" class="btn btn-primary">Click para hacer cambios productos!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="../img/abarrotes.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Consultar Productos</h4>
            <p class="card-text">Podras consultar los productos de la base de datos.</p>
          </div>
          <div class="card-footer">
            <a href="consultarProducto.php" class="btn btn-primary">Click para consultar productos!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="../img/abarrotes.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Listar Productos</h4>
            <p class="card-text">Podras listar todos los productos de la base de datos.</p>
          </div>
          <div class="card-footer">
            <a href="listarProducto.php" class="btn btn-primary">Click para listar productos!</a>
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
