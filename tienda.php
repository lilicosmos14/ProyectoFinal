<?php
	include("menu.php");
	include_once "funciones.php";
	$productos = obtenerProductos();
?>

<title>MO'O REEKS | TIENDA</title>

<head>
	<!--Estilos CSS-->
	<link rel="stylesheet" href="css/style2.css">
	<link rel="stylesheet" href="css/style.css">


	<!--Bootstrap-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

	<!--CDN Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Aladin&family=Chivo:wght@700&family=Ubuntu:wght@500&display=swap" rel="stylesheet">

	<!--CDN FontAwesome -->
	<script src="https://kit.fontawesome.com/1591f89edb.js" crossorigin="anonymous"></script>

	<!--JQuery-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>




	<script>
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





</head>

<body>

	<!--Contenedor del sidebar y de las tarjetas-->
	<div class="contenedor">

		<h1 class="banner" id="banner"> TIENDA </h1>
		<div id="f">
			<div class="filtro">
				<h3 class="banner2">Filtrar</h3>
				<hr>
				<button class="boton" id="uno">ACCESORIOS</button>
				<br>
				<button class="boton" id="dos">MUJERES</button>
				<br>
				<button class="boton" id="tres">HOMBRES</button>
				<br>
				<button class="boton" id="cuatro">BORRAR FILTRO</button>

			</div>
		</div>

		<div id="cards" class="cards">
			<?php foreach ($productos as $producto) { ?>
			<div class="card" style="width: 18rem;">
				<img src="img/productos/<?php echo $producto->imagen?>" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title"><?php echo $producto->nombre?></h5>
					<p class="card-text"><?php echo $producto->descripcion?></p>
					<p class="card-text">$<?php echo number_format($producto->precio,2) ?></p>

					<?php if (productoYaEstaEnCarrito($producto->idprod)) { ?>
					<form action="eliminardelcarrito.php" method="post">
						<input type="hidden" name="id_producto" value="<?php echo $producto->idprod ?>">
						<span class="button is-success">
							<i class="fa fa-check"></i>&nbsp;En el carrito
						</span>
						<button class="button is-danger">
							<i class="fa fa-trash-o"></i>&nbsp;Quitar
						</button>
					</form>
					<?php } else { ?>
					<form action="agregarcarrito.php" method="post">
						<input type="hidden" name="id_producto" value="<?php echo $producto->idprod ?>">
						<button class="button is-primary">
							<i class="fa fa-cart-plus"></i>&nbsp;Agregar al carrito
						</button>
					</form>
					<?php } ?>

				</div>
			</div>
			<?php } ?>

		</div>

	</div>
</body>
<div class="pie"><?php include("footer.php");?></div>
