<?php
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
     
     
    //conexion a la base de datos
    $conexion = new mysqli($servidor,$cuenta,$password,$bd);

	$sql = 'select * from productos';
	$resultado = $conexion -> query($sql);
	
    $numPro = 0;
	?>

<script>
	var array = [];

</script>

<?php

	 while( $fila = $resultado ->  fetch_assoc()){
        $imagen = $fila['nombre'];
        $producto = $fila['idprod'];
        $precio = $fila['precio'];
		 
	?>
<script>
	array.push("<?php echo $producto ?>");

</script>

<?php

    if ($conexion->connect_errno){
         die('Error en la conexion');
    }

    else{
		$sql = 'select * from productos'; //hacemos cadena  con la sentencia mysql que consulte el id del producto
		$resultado = $conexion -> query($sql);
		
		if($resultado -> num_rows){  //si la consulta genera registros
			?>
<div class="cards">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
		<?php
					while($fila=$resultado -> fetch_assoc()){ ?>
		<div class="card" style="width: 18rem;" id="shadow">
			<img src="../img/productos/<?php echo $fila['imagen']; ?>" class="card-img-top" id="img" alt="...">
			<div class="card-body">
				<h5 class="card-title"><?php echo $fila['idprod']." ".$fila['nombre'];?></h5>
				<p class="card-text"><?php echo $fila['descripcion']."<br>"."$".$fila['precio']." MXN"; ?></p>
				<button type="submit" class="btn btn-outline-success" name="submit"><a href="modificar.php">Modificar</a></button>
			</div>
		</div>
	</form>



	<?php
				}
		}
	}


        $numPro = $numPro+1;
    }//fin while
?>
</div>

<?php include("../footer.php");?>
