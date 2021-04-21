<?php
	class Categoria{
		private $nombrecategoria;
		public function inicializar($nombrecategoria){
			$this->nombrecategoria=$nombrecategoria;
		}
		public function conexion(){
			$con=mysqli_connect("localhost","root","","base1") or die("Problemas con la conexión a la base de datos");
			return $con;
		}

        public function llenarListaCategorias(){
      $registros=mysqli_query($this->conexion(),"SELECT * FROM categorias") or
      die("Problemas en el select categorias".mysqli_error($this->conexion()));
      while ($reg=mysqli_fetch_array($registros)){
        echo"<option value=$reg[0]>$reg[1]</option>";
      }
    }
		public function insertar(){
      $registros=mysqli_query($this->conexion(),"select * from categorias where nombrecategoria='$this->nombrecategoria'");
            if($reg=mysqli_fetch_array($registros)){
                echo 'Una categoria ya existe con ese nombre ingrese otro nombre';
                echo "<form action='altaCategoria.php' method='post'>
              <input type='submit' value='Regresar'><br><br></form>";
            }
            else{
				mysqli_query($this->conexion(),"INSERT INTO categorias(nombrecategoria) VALUES ('$this->nombrecategoria')") or die("Problemas en el insert".mysqli_error($this->conexion()));
				echo 'La nueva categoria se almaceno';
        echo "<form action='abcCategoria.php' method='post'>
              <input type='submit' value='Regresar'><br><br></form>";

      }
		}

		public function listarCategorias(){
		
            $registros=mysqli_query($this->conexion(),"select * from categorias") or
                 die(mysqli_error($this->conexion()));
                    echo '<table border 1 class="tablalistado">';
                    echo '<tr><th>Código de Categoria</th><th>Nombre de Categoria</th></tr>';
                        while ($reg=mysqli_fetch_array($registros)){
                          echo '<tr><td>'.$reg[0].'</td>';
                          echo '<td>'.$reg[1].'</td>';    
                    }   
                    echo '</table>';
                    echo "<form action='abcCategoria.php' method='post'>
              <input type='submit' value='Regresar'><br><br></form>";

        }
        public function consultarCategoria($nombrecategoria){
            $registro=mysqli_query($this->conexion(),"select * from categorias where nombrecategoria='$_REQUEST[nombrecategoria]'") or die(mysqli_error($this->conexion()));
            if ($reg=mysqli_fetch_array($registro)){
            echo '<table border 1 class="tablalistado">';
            echo '<tr><th>Código</th><th>Nombre</th></th></tr>';
            echo '<tr><td>'.$reg[0].'</td>';
            echo '<td>'.$reg[1].'</td>';
            echo "</table><br>";
            echo "<form action='abcCategoria.php' method='post'>
              <input type='submit' value='Regresar'><br><br></form>";
            }
          else{
              echo 'No existe tal Categoria ingrese nuevamente el nombre';
              echo "<form action='consultarCategoria.php' method='post'>
              <input type='submit' value='Regresar'><br><br></form>";
          }
      }
        

        public function eliminarCategoria($nombrecategoria){
        	//solo muestra pasmado el primer producto
        	$registro=mysqli_query($this->conexion(),"select * from categorias where nombrecategoria='$_REQUEST[nombrecategoria]'") or die(mysqli_error($this->conexion()));
        	if ($reg=mysqli_fetch_array($registro)){
            	echo '<table border 1 >';
            	echo '<tr><th>Codigo Categoria</th><th>Nombre Categoria</th></tr>';
            	echo "<td>".$reg[0]."<br>";
            	echo "<td>".$reg[1]."<br>";
            	echo "</table>";
            	mysqli_query($this->conexion(),"delete from categorias where nombrecategoria='$nombrecategoria'");

            	echo "<br><br><br>Se elimino la categoria que se muestra en pantalla";
              echo "<form action='abcCategoria.php' method='post'>
              <input type='submit' value='Regresar'><br><br></form>";

        	}
        	else{
            	echo 'No existe tal Categoria ingrese nuevamente el nombre';
              echo "<form action='bajaCategoria.php' method='post'>
              <input type='submit' value='Regresar'><br><br></form>";
       		}
    	}
		
		public function cerrar(){
			mysqli_close($this->conexion());
		}
	}
?>