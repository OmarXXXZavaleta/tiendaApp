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
    $m1 ->mostrarMenuUsuario();
    ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">Bienvenido a la Tienda</h1>
      <p class="lead">En esta tienda podras encontrar diversos productos que se venden en cualquier otra tienda.</p>
      <a href="menus/menu.php" class="btn btn-primary btn-lg">Click para ver nuestros articulos</a>
    </header>

    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="img/abarrotes.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Abarrotes</h4>
            <p class="card-text">Podras encontrar cosas que busques normalmente en una tienda.</p>
          </div>
          <div class="card-footer">
            <a href="menus/menu.php" class="btn btn-primary">Click para ver más!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="img/lacteos.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Lacteos</h4>
            <p class="card-text">Podras encontrar productos naturalmente de vaca como tambien la linea de deslactosada.</p>
          </div>
          <div class="card-footer">
            <a href="menus/menuLacteos.php" class="btn btn-primary">Click para ver más!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="img/detergente.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Detergentes</h4>
            <p class="card-text">Podras encontrar articulos para poder lavar cualquier tipo de cosa.</p>
          </div>
          <div class="card-footer">
            <a href="menus/menuDetergente.php" class="btn btn-primary">Click para ver más!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="img/comida.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Alimentos</h4>
            <p class="card-text">Podras encontrar cualquier alimento para una preparación rapida y sencilla.</p>
          </div>
          <div class="card-footer">
            <a href="menus/menuAlimentos.php" class="btn btn-primary">Click para ver más!</a>
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
