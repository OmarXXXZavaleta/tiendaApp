<?php

class menu{

    public function __construct(){
    }

    public function mostrarMenuAdmin(){

        echo   '<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="indexUser.html">Tienda</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="indexUser.html">Inicio
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="abcProductos/abcProducto.html">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="abcCategorias/abcCategoria.html">Categorias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="abc.html">Admin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html">Cerrar Sesion</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>';

    }
    
    public function mostrarMenuUsuario(){

        echo   '<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
        <a class="navbar-brand" href="indexUsuario.php"><img src="img/logo.png" width="80"/>System Fitness</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" 
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" 
            aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="indexUsuario.php">Bienvenido</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dietasUsuario.php">Dietas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="rutinasUsuario.php">Rutinas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="nosotrosUsuario.php">Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Cerrar Sesión</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>';

    }
}
?>