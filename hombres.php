<?php
include_once "funciones.php";
?><head>
	<!--Estilos CSS-->
	<link rel="stylesheet" href="css/style2.css">

	<!--CDN BOOSTRAP 5.1.3-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!--CDN Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Aladin&family=Chivo:wght@700&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
	
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
	
	<!--Scripts-->
	<script>


	function mOver(obj) {
		obj.innerHTML = "Añadir al Carrito"
	}

	function mOut(obj) {
		obj.innerHTML = "<i class='fa-solid fa-cart-shopping'></i>"
	}


	/*Carga solo pagina de accesorios*/
	$(document).ready(function() {
		$("#uno").click(function() {
			$("#cards").load("accesorios.php");
			$("#banner").text("ACCESORIOS");
		});
	});

	/*Carga solo pagina mujeres*/
	$(document).ready(function() {
		$("#dos").click(function() {
			$("#cards").load("mujeres.php");
			$("#banner").text("MUJERES");
		});
	});

	/*Carga solo pagina hombres*/
	$(document).ready(function() {
		$("#tres").click(function() {
			$("#cards").load("hombres.php");
			$("#banner").text("HOMBRES");
		});
	});

</script>
	

<?php

	$servidor = 'localhost';
	$cuenta= 'id19984230_tienda';
	$password='t81Wr#D0g%C5E<oX';
	$bd='id19984230_mooreeks';
     
    //conexion a la base de datos
    $conexion = new mysqli($servidor,$cuenta,$password,$bd);

	
	if ($conexion->connect_errno){
         die('Error en la conexion');
    }

    else{
		$sql = 'SELECT * FROM productos 
				WHERE categoria = "Hombre"'; //hacemos cadena  con la sentencia mysql que consulte el id del producto
		$resultado = $conexion -> query($sql);
		
		if($resultado -> num_rows){  //si la consulta genera registros
			?>

<!--Contenedor del sidebar y de las tarjetas-->
<div class="contenedor">


	<div id="cards" class="cards">
			<?php while($fila=$resultado -> fetch_assoc()) { ?>
			<div class="card" style="width: 18rem;">
				<img src="img/productos/<?php echo $fila['imagen']; ?>" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title"><?php echo $fila['nombre']; ?></h5>
					<p class="card-text"><?php echo $fila['descripcion'] ?></p>
					<p class="card-text">$<?php echo number_format($fila['precio'],2) ?></p>

					<?php if (productoYaEstaEnCarrito($fila['idprod'])) { ?>
					<form action="eliminardelcarrito.php" method="post">
						<input type="hidden" name="id_producto" value="<?php echo $fila['idprod'] ?>">
						<span class="button is-success">
							<i class="fa fa-check"></i>&nbsp;En el carrito
						</span>
						<button class="button is-danger">
							<i class="fa fa-trash-o"></i>&nbsp;Quitar
						</button>
					</form>
					<?php } else { ?>
					<form action="agregarcarrito.php" method="post">
						<input type="hidden" name="id_producto" value="<?php echo $fila['idprod'] ?>">
						<button class="button is-primary">
							<i class="fa fa-cart-plus"></i>&nbsp;Agregar al carrito
						</button>
					</form>
					<?php } ?>

				</div>
			</div>
			<?php } ?>

		</div>




		<?php			
}
		}
?>
	</div>
