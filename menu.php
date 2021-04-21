<?php

class menu{

    public function __construct(){
    }

    public function mostrarMenuAdmin(){

        echo   '<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="indexUser.php">Tienda</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="indexUser.php">Inicio
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="abcProductos/abcProducto.php">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="abcCategorias/abcCategoria.php">Categorias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="abc.php">Admin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">Cerrar Sesion</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>';

    }
    public function mostrarMAC(){

      echo   '<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="../indexUser.php">Tienda</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../indexUser.php">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="../abcProductos/abcProducto.php">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="abcCategoria.php">Categorias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../abc.php">Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.php">Cerrar Sesion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>';

  }
  public function mostrarMAP(){

    echo   '<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="../indexUser.php">Tienda</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../indexUser.php">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="abcProducto.php">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../abcCategorias/abcCategoria.php">Categorias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../abc.php">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Cerrar Sesion</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>';

}
    public function mostrarMenuUsuario(){

        echo   '<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="index.php">Tienda</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Inicio
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menus/menu.php">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login Admin</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>';

    }

    
}
?>