<?php
session_start();
 include"int.html";
?>
<link rel="stylesheet" href="estilocosnulta.css">

<?php 
	$servidor = 'localhost';
	$cuenta= 'root';
	$password='';
	$bd='produc';

	 $_SESSION['id'] = '';
    $_SESSION['nom'] = '';
    $_SESSION['cat'] = '';
    $_SESSION['desc'] = '';
	$_SESSION['exis'] = '';
    $_SESSION['pre'] = '';
    $_SESSION['imga'] = '';

	
	//conexion a la base de datos
	$conexion =  new mysqli($servidor,$cuenta,$password,$bd);

	if ($conexion->connect_errno){
		die('Eroor en la conexion');
	}
	else{
		if(isset($_POST['acept'])){
        $modificar = $_POST['eliminar'];
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
	
		//conexion exitosa

		if (isset($_POST['submit'])) {
			// obtenemos datos del formulario
			$eliminar = $_POST['eliminar'];

			//hacemos cadena con la sentencia mysql para eliminar
			$sql = "DELETE FROM articulos WHERE idprod='$eliminar'";
			$conexion->query($sql);
			if ($conexion->affected_rows >= 1) { //reviamos que se elimino
				echo '<br> registro borrado <br>';
			}//fin
		}//fin
		

		//continuamos con la consulta de datos a la tabla usuarios
		//vemos datos en una tabla de html

		$sql = 'select * from articulos'; //hacemos cadena  con la sentencia mysql que consulta todo el contenido
		$resultado = $conexion -> query($sql); //aplicamos sentencia

		if($resultado -> num_rows){  //si la consulta genera registros
			?>
<div class="formulario">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
		<legend>Eliminar Articulo</legend>
		<br>
		
		<select class="browser-default custom-select" name="eliminar">
			<?php
							while ($fila = $resultado -> fetch_assoc()) { //recorremos registros
								echo '<option value ="'.$fila["idprod"].'">'.$fila["nombre"].'</option>';
							}
			
						?>
		</select>
		<br><br>

		<button type="submit" value="acept" class="btn btn-outline-success" name="acept">Aceptar</button>
		<button type="submit" value="submit" class="btn btn-outline-success" name="submit">Eliminar</button>
	</form>

</div>
<?php
		}
		
		else{
			echo "no hay datos";
		}
}//fin else de conexion exitosa
		 
	
?>


<?php  if(isset($_POST['acept'])){		?>
<div class="container">
	<div class="card" style="width: 18rem;">
		<img src="img/<?php echo $_SESSION['imga']; ?>" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title"><?php echo $_SESSION["id"]." ".$_SESSION["nom"];?></h5>
			<p class="card-text"><?php echo $_SESSION['desc']."<br>"."$".$_SESSION['pre']." MXN"; ?></p>
			<button type="submit" class="btn btn-outline-success" name="submit">Agreagar al Carrito</button>
		</div>
	</div>
</div>
<?php    }  ?>
      	
			



