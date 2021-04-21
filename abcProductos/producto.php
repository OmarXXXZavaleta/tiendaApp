<?php
    class Producto{
        
        private $nombre;
        private $precio;
        private $codigocategoria;
        public function inicializar($nombre, $precio, $codigocategoria){
            
            $this->nombre=$nombre;
            $this->precio=$precio;
            $this->codigocategoria=$codigocategoria;

        }
        public function conexion(){
            $con=mysqli_connect("localhost","root","","base1") or die("Problemas con la conexión a la base de datos");
            return $con;
        }
        
        public function insertar(){
            $registros=mysqli_query($this->conexion(),"select * from productos where nombre='$this->nombre'");
            if($reg=mysqli_fetch_array($registros)){
                echo 'Un producto ya existe con ese nombre ingrese otro nombre';
                echo "<form action='altaProducto.php' method='post'>
              <input type='submit' value='Regresar'><br><br></form>";
            }
            else{

                mysqli_query($this->conexion(),"INSERT INTO productos(nombre,precio,codigocategoria) VALUES ('$this->nombre','$this->precio','$this->codigocategoria')") or die("Problemas en el insert".mysqli_error($this->conexion()));
                echo 'El nuevo producto se almaceno';
                echo "<form action='abcProducto.php' method='post'>
              <input type='submit' value='Regresar'><br><br></form>";
            }
        }

        public function listarProductos(){
            $registros=mysqli_query($this->conexion(),"select * from productos") or
            //$registros=mysqli_query($this->conexion(),"select * from productos p, categorias c where p.codigocategoria=c.nombrecategoria") or

            //asi queda mas o menos bien pero no enseña lo ultomo insertado
            //a, cursos c where a.codigocurso=c.codigo
                 die(mysqli_error($this->conexion()));
                    echo '<table border 1 class="tablalistado">';
                    echo '<tr><th>Código</th><th>Nombre</th><th>Precio</th><th>Codigo Categoria</th></tr>';
                        while ($reg=mysqli_fetch_array($registros)){
                          echo '<tr><td>'.$reg[0].'</td>';
                          echo '<td>'.$reg[1].'</td>';    
                          echo '<td>'.$reg[2].'</td>';
                          echo '<td>'.$reg[3].'</td>';
                          //echo '<td>'.$reg[5].'</td>';
                    }   
                    echo '</table>';
                    echo "<form action='abcProducto.php' method='post'>
              <input type='submit' value='Regresar'><br><br></form>";
        }

        public function consultarProducto($nombre){
            $registro=mysqli_query($this->conexion(),"select * from productos where nombre='$_REQUEST[nombre]'") or die(mysqli_error($this->conexion()));
            if ($reg=mysqli_fetch_array($registro)){
            echo '<table border 1 class="tablalistado">';
            echo '<tr><th>Código</th><th>Nombre</th><th>Precio</th><th>Categoria</th></tr>';
            
                          echo '<tr><td>'.$reg[0].'</td>';
                          echo '<td>'.$reg[1].'</td>';
                          echo '<td>'.$reg[2].'</td>';
                          echo '<td>'.$reg[3].'</td>';
            echo '</table>';
            echo '<form action="consultarProducto.php" method="post">
              <input type="submit" value="Regresar"><br><br></form>';

        }

            else{
                echo 'No existe tal Producto ingrese nuevamente el nombre';
                echo "<form action='consultarProducto.php' method='post'>
              <input type='submit' value='Regresar'><br><br></form>";
            }
        }

        public function eliminarProducto($nombre){
            $registro=mysqli_query($this->conexion(),"select * from productos where nombre='$_REQUEST[nombre]'") or die(mysqli_error($this->conexion()));
            if ($reg=mysqli_fetch_array($registro)){
                echo '<table border 1 >';
                echo '<tr><th>Codigo Producto</th><th>Nombre</th><th>Precio</th><th>Codigo Categoria</th></tr>';
                echo "<td>".$reg[0]."<br>";
                echo "<td>".$reg[1]."<br>";
                echo "<td>".$reg[2]."<br>";
                echo "<td>".$reg[3]."<br>";
                //echo "<td>".$reg[5]."<br>";
                echo "</table>";
                mysqli_query($this->conexion(),"delete from productos where nombre='$nombre'");
                echo "<br><br><br>Se elimino el Producto que se muestra en pantalla";
                echo "<form action='abcProducto.php' method='post'>
              <input type='submit' value='Regresar'><br><br></form>";
            }
            else{
                echo 'No existe tal Producto ingrese nuevamente el nombre';
                echo "<form action='abcProducto.php' method='post'>
              <input type='submit' value='Regresar'><br><br></form>";
            }
        }

        public function modificarProducto($nombre) {
            $registros = mysqli_query($this->conexion(), "select * from productos where nombre='$_REQUEST[nombre]'") or die("Problemas en la consulta".mysqli_error($this->conexion()));

            if ($reg=mysqli_fetch_array($registros)) {
                echo "<form action='productoCtrl.php' method='post'>

                        Nombre actualmente:
                        <input type='text' name='nombre' value='".$reg['nombre']."' readonly><br><br>
                        
                        Ingrese nuevo nombre:
                        <input type='text' name='nombrenuevo' value=".$reg['nombre']."><br>
                        <input type='hidden' name='nombreviejo' value=".$reg['nombre']."><br>

                        Ingrese nuevo precio:
                        <input type='number' name='precionuevo' value=".$reg['precio']."><br>
                        <input type='hidden' name='precioviejo' value=".$reg['precio']."><br>

                        <input type='text' name='opcion' value='modificar2' hidden>

                        Ingrese nueva categoria:";

                        echo "<select name='codigocategorianuevo'>";

                            include 'categoria.php';
                            $Categoria1=new Categoria();
                            $Categoria1->conexion();
                            $Categoria1->LlenarListaCategorias();
                            $Categoria1->cerrar();
                            echo "</select>
                            <br><br>
                            <input type='submit' name='boton' value='modificar'>
                            </form>";
                        }
                        else{
                            echo  "Error, no existe producto ingrese nuevamente el nombre";
                            echo "<form action='abcProducto.php' method='post'>
              <input type='submit' value='Regresar'><br><br></form>";
                        }
        }
        public function modificarProducto2($nombreviejo,$nombrenuevo,$precionuevo,$codigocategorianuevo){
            
                $registros=mysqli_query($this->conexion(),"UPDATE productos SET nombre='$nombrenuevo',precio='$precionuevo',codigocategoria='$codigocategorianuevo' WHERE nombre='$nombreviejo'") or die (mysqli_error($this->conexion()));
          echo 'El producto se a modificado correctamente';
          echo "<form action='abcProducto.php' method='post'>
              <input type='submit' value='Regresar'><br><br></form>";
            }
        

        public function cerrar(){
            mysqli_close($this->conexion());
        }
    }
?>