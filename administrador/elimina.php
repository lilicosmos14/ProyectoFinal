<?php
session_start();
 include"int.php";
?>
<link rel="stylesheet" href="../css/estilocosnulta.css">
<link rel="stylesheet" href="../css/xtilos.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!--Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<?php 
	$servidor = 'localhost';
	$cuenta= 'id19984230_tienda';
	$password='t81Wr#D0g%C5E<oX';
	$bd='id19984230_mooreeks';
     

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
                 FROM productos
                 WHERE idprod='$modificar'";
        $resultado = $conexion -> query($sql2);
        while($fila = $resultado -> fetch_assoc()){
            $_SESSION['id'] = $fila['idprod'];
            $_SESSION['nom'] = $fila['nombre'];
            $_SESSION['cat'] = $fila['categoria' ];
            $_SESSION['desc'] = $fila['descripcion'];
			$_SESSION['exis'] = $fila['existencia'];
			$_SESSION['pre'] = $fila['precio'];
			$_SESSION['imga'] = $fila['imagen'];
        }
    }
	
		//conexion exitosa

		if (isset($_POST['submit'])) {
			// obtenemos datos del formulario
			$eliminar = $_POST['eliminar'];

			//hacemos cadena con la sentencia mysql para eliminar
			$sql = "DELETE FROM productos WHERE idprod='$eliminar'";
			$conexion->query($sql);
			if ($conexion->affected_rows >= 1) { //reviamos que se elimino
				echo '<script>alert("Articulo Eliminado")</script>';
			}//fin
		}//fin
		

		//continuamos con la consulta de datos a la tabla usuarios
		//vemos datos en una tabla de html

		$sql = 'select * from productos'; //hacemos cadena  con la sentencia mysql que consulta todo el contenido
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
		<img src="../img/productos/<?php echo $_SESSION['imga']; ?>" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title"><?php echo $_SESSION["id"]." ".$_SESSION["nom"];?></h5>
			<p class="card-text"><?php echo $_SESSION['desc']."<br>"."$".$_SESSION['pre']." MXN"; ?></p>
		</div>
	</div>
</div>
<?php    }  ?>


<?php include("../footer.php");?>
