<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Abarrotes</title>

  <!-- Bootstrap core CSS -->
  
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <!--<link href="C:/xampp/htdocs/dashboard/conexionTienda/css/shop-homepage.css" rel="stylesheet">-->
  <link href="../css/shop-homepage.css" rel="stylesheet">
  
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

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Abarrotes</h1>
        <div class="list-group">
          <a href="../menus/menu.php" class="list-group-item active">Abarrotes</a>
          <a href="../menus/menuLacteos.php" class="list-group-item">Lacteos</a>
          <a href="../menus/menuDetergente.php" class="list-group-item">Detergentes</a>
          <a href="../menus/menuAlimentos.php" class="list-group-item">Alimentos</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="../img/abarrotes/promo.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="../img/abarrotes/promo2.png" alt="Second slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../img/abarrotes/arroz.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Arroz</a>
                </h4>
                <h5>$24.99</h5>
                
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../img/abarrotes/azucar.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Azucar</a>
                </h4>
                <h5>$24.99</h5>
                
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../img/abarrotes/frijol.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Frijol</a>
                </h4>
                <h5>$24.99</h5>
                
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../img/abarrotes/sardina.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Sardina</a>
                </h4>
                <h5>$24.99</h5>
                
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../img/abarrotes/cafe.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Cafe</a>
                </h4>
                <h5>$24.99</h5>
                
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../img/abarrotes/chiles.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Chiles en vinagre</a>
                </h4>
                <h5>$24.99</h5>
                
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

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
  <script src="../vendor/jquery/jquery.min.js"></script>
  
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
