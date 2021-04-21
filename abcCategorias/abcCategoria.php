<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>¿Que desea hacer?</title>

  <!-- Bootstrap core CSS -->
  <!-- Bootstrap core CSS -->
  <!--<link href="C:/xampp/htdocs/dashboard/conexionTienda/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
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
      <h1 class="display-3">¿Que desea hacer?</h1>

    </header>
    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="../img/abarrotes.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Alta de categorias</h4>
            <p class="card-text">Podras subir nuevas categorias a la base de datos.</p>
          </div>
          <div class="card-footer">
            <a href="altaCategoria.php" class="btn btn-primary">Click para dar de Alta categorias!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="../img/abarrotes.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Baja de Categorias</h4>
            <p class="card-text">Podras dar de baja categorias de la base de datos.</p>
          </div>
          <div class="card-footer">
            <a href="bajaCategoria.php" class="btn btn-primary">Click para dar de baja categorias!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="../img/abarrotes.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Consultar Categorias</h4>
            <p class="card-text">Podras consultar una categoria en especifico de la base de datos.</p>
          </div>
          <div class="card-footer">
            <a href="consultarCategoria.php" class="btn btn-primary">Click para consultar categorias!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="../img/abarrotes.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Listar Categorias</h4>
            <p class="card-text">Podras listar todas las categorias de la base de datos.</p>
          </div>
          <div class="card-footer">
            <a href="listarCategoria.php" class="btn btn-primary">Click para listar categorias!</a>
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
