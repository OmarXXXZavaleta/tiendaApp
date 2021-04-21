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
    $m1 ->mostrarMAP();
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
      include("producto.php");
      $opcion=$_REQUEST['opcion'];


      $producto1=new Producto();
	    $producto1->conexion();

      switch($opcion)
      {

        case 'insertar':
        //AQUI INICIA EL INSERT//
	       $nombre=$_REQUEST['nombre'];
	       $precio=$_REQUEST['precio'];
	       //$codigocategoria=$_REQUEST['codigocategoria'];
         $nombrecategoria=$_REQUEST['nombrecategoria'];

	       $producto1->inicializar($nombre, $precio, $nombrecategoria);
	       $producto1->insertar();
	     //AQUI TERMINA EL INSERT//
        break;

        case 'listar':
	       $producto1->listarProductos(); //AQUI ES PARA LISTAR LOS PRODUCTOS EN LA BASE DE DATOS 
        break;

        case 'eliminar':
	       //AQUI EMPIEZA EL BORRAR PRODUCTOS//
	       $nombre=$_REQUEST['nombre'];
	       $producto1->eliminarProducto($nombre);
	       //AQUI TERMINAR EL BORRAR PRODUCTOS//
        break;

        case 'consultar':
        //aqui empieza la consulta por nombre de producto
        $nombre=$_REQUEST['nombre'];
        $producto1->consultarProducto($nombre);
        //aqui termina
        break;

        case 'modificar':
        //aqui empieza el modificar
        $nombre=$_REQUEST['nombre'];
        $producto1->modificarProducto($nombre);
        break;

        case 'modificar2':
        $nombre=$_REQUEST['nombreviejo'];
        $nombrenuevo=$_REQUEST['nombrenuevo'];
        $precionuevo=$_REQUEST['precionuevo'];
        $codigocategorianuevo=$_REQUEST['codigocategorianuevo'];
        $producto1->modificarProducto2($nombre,$nombrenuevo,$precionuevo,$codigocategorianuevo);
        //aqui termina 
        break;

	     }
         $producto1->cerrar();
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
