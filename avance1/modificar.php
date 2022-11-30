<?php
 session_start();
 include"int.html";
?>

<link rel="stylesheet" href="xtilos.css">

<?php
	$servidor='localhost';
    $cuenta='root';
    $password='';
    $bd='produc';

    $_SESSION['id'] = '';
    $_SESSION['nom'] = '';
    $_SESSION['cat'] = '';
    $_SESSION['desc'] = '';
	$_SESSION['exis'] = '';
    $_SESSION['pre'] = '';
    $_SESSION['imga'] = '';

     $conexion = new mysqli($servidor,$cuenta,$password,$bd);

 if ($conexion->connect_errno){
         die('Error en la conexion');
    }

   if(isset($_POST['submit'])){
        $modificar = $_POST['modificar'];
        $_SESSION['modificar2'] = $modificar;
        $sql2 = "SELECT *
                 FROM articulos
                 WHERE idprod='$modificar'";
        $resultado = $conexion -> query($sql2);
        while($fila = $resultado -> fetch_assoc()){
            $_SESSION['id'] = $fila['idprod'];
            $_SESSION['nom'] = $fila['nombre'];
            $_SESSION['cat'] = $fila['categoria' ];
            $_SESSION['desc'] = $fila['descripcion'];
			$_SESSION['exis'] = $fila['existencia'];
			$_SESSION['pre'] = $fila['precio'];
			$_SESSION['imga'] = $fila['img'];
        }
    }

    if(isset($_POST['mod'])){
        $uno = $_POST['idprod2'];
        $dos = $_POST['nombre2'];
        $tres = $_POST['categoria2'];
        $cuatro = $_POST['descripcion2'];
		$cinco = $_POST['exis2'];
		$seis = $_POST['pre2'];
		
        $modificar1 = $_SESSION['modificar2'];
        
        $ne = "UPDATE articulos
               SET idprod = '$uno', nombre='$dos', categoria='$tres', descripcion='$cuatro', existencia='$cinco', precio='$seis'
               WHERE idprod = '$modificar1'";
        $fin = $conexion -> query($ne);
    }
       
?>



<div class="contenedor2">
	<div class="izquierdaAlta">

		<?php        
         //continuamos con la consulta de datos a la tabla usuarios
         //vemos datos en un tabla de html
         $sql = 'select * from articulos';//hacemos cadena con la sentencia mysql que consulta todo el contenido de la tabla
         $resultado = $conexion -> query($sql); //aplicamos sentencia
         
         if ($resultado -> num_rows){ //si la consulta genera registros
         ?>


		<div class="izqAlta">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>

				<legend>Modificar Articulos</legend>
				<br>
				<select class="custom-select" name='modificar'>

					<?php
                
                while( $fila = $resultado -> fetch_assoc() ){ //recorremos los registros obtenidos de la tabla
                    echo '<option value="'.$fila["idprod"].'">'.$fila["nombre"].'</option>';
                    //proceso de concatenacion de datos
                   
                    }//fin while   
                    
                ?>
				</select>
				<br><br>
				<button type="submit" value="submit" class="btn btn-outline-success" name="submit">Modificar</button>

			</form>
		</div>
		<?php
        
         }
         else{
             echo "no hay datos";
         }
        
?>
	</div>

</div>
<div class="contenedor">
	<div class="derecha">

		<form class="estiloformulario" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
			<ul class="wrapper">
				<li class="form-row">
					<label for="id">ID</label>
					<input type="number" name="idprod2" id="idprod" value="<?php echo $_SESSION['id']; ?>">
				</li>
				<li class="form-row">
					<label for="nombre">NOMBRE</label>
					<input type="text" id="nombre" name="nombre2" value="<?php echo $_SESSION["nom"]; ?>">
				</li>
				<li class="form-row">
					<label for="cuenta">CATEGORIA</label>
					<input type="text" id="categoria" name="categoria2" value="<?php echo $_SESSION["cat"]; ?>">
				</li>
				<li class="form-row">
					<label for="contra">DESCRIPCION</label>
					<input type="text" id="descripcion" name="descripcion2" value="<?php echo $_SESSION['desc']; ?>">
				</li>
				<li class="form-row">
					<label for="contra">EXISTENCIA</label>
					<input type="num" id="exis" name="exis2" value="<?php echo $_SESSION['exis']; ?>">
				</li>
				<li class="form-row">
					<label for="contra">PRECIO</label>
					<input type="num" id="pre" name="pre2" value="<?php echo $_SESSION['pre']; ?>">
				</li>
				<li class="form-row">
					<button type="submit" class="btn btn-outline-success" name="mod">Guardar Cambios</button>

				</li>
			</ul>

		</form>
	</div>



	<?php
				if(isset($_POST['submit'])){
				

			?>
	<div class="izquierdaBaja">


		<div class="card" style="width: 18rem;">
			<img src="img/<?php echo $_SESSION['imga']; ?>" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title"><?php echo $_SESSION['id']." ".$_SESSION['nom'];?></h5>
				<p class="card-text"><?php echo $_SESSION['desc']."<br>"."$".$_SESSION['pre']." MXN"; ?></p>
				<button type="submit" class="btn btn-outline-success" name="submit">Agreagar al Carrito</button>
			</div>
		</div>

	</div>
</div>

<?php
				}
				
?>
