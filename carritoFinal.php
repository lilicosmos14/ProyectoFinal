<?php include "menu.php" ?>
<?php
include_once "funciones.php";
$productos = obtenerProductosEnCarrito();
if (count($productos) <= 0) {
?>
<title>Carrito</title>
<!--Bootstrap-->
<link rel="stylesheet" href="css/style2.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

<!--CDN Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Aladin&family=Chivo:wght@700&family=Ubuntu:wght@500&display=swap" rel="stylesheet">

<!--CDN FontAwesome -->
<script src="https://kit.fontawesome.com/1591f89edb.js" crossorigin="anonymous"></script>

<body>


	<section id="empy">
		<div class="hero-body">
			<div class="container" style="text-align:center; background-color:#e6af91">
				<h1 class="title">
					Todavía no hay productos
				</h1>
				<h2 class="subtitle">
					Visita la tienda para agregar productos a tu carrito
				</h2>
				<button class="boton" type="submit" value="acept"><a href="tienda.php" style="color:white;"><strong>Ver Tienda</strong></a></button>
				<br><br>
			</div>
		</div>
	</section>
	<?php } else { ?>
	<br><br>
	<div class="carrito">
		<br><br>
		<div class="cupones">
			<div class="for">
				<h5>CANJEA TUS CUPONES</h5>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					<input type="text" placeholder="CUPON" name="cup">
					<hr>
					<button type="submit" class="boton" style="text-aling:center;" id="uno">CANJEAR</button>
				</form>
				<div class="canje">
					<p class="">Costos de envio e impuestos <br> se calculan al terminar la compra</p>
					<p class="cupon2"></p>
					<p class="cupon3"></p>
				</div>

			</div>
		</div>
		<div class="columns" id="pedido">
			<div class="column">
				<h2 class="is-size-2" style="text-align:center;">Mi carrito de compras</h2>
				<table class="table">
					<thead>
						<tr>
							<th>Producto</th>
							<th>Nombre</th>
							<th>Descripción</th>

							<th>Precio</th>
							<th>Quitar</th>
						</tr>
					</thead>
					<tbody>
						<?php
					//$cantidad = $_POST['select'];
                    $total = 0;
                    foreach ($productos as $producto) {
                        $total += $producto->precio;
                    ?>
						<tr>
							<td><img src="img/productos/<?php echo $producto->imagen ?>" alt="" width="100px"></td>
							<td><?php echo $producto->nombre ?></td>
							<td><?php echo $producto->descripcion ?></td>

							<td>$<?php echo number_format($producto->precio, 2) ?></td>
							<td>
								<form action="eliminardelcarrito.php" method="post">
									<input type="hidden" name="id_producto" value="<?php echo $producto->idprod ?>">
									<input type="hidden" name="redireccionar_carrito">
									<button class="button is-danger">
										<i class="fa fa-trash-o"></i>
									</button>
								</form>
							</td>
							<?php } ?>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="3" class="is-size-4 has-text-right"><strong>Total</strong></td>
							<td colspan="3" class="is-size-4" id="nuevototal">
								$<?php echo number_format(($total*1.16), 2) ?>
							</td>
						</tr>
					</tfoot>
				</table>
				<a href="terminarcompra.php" class="button is-success is-large"><i class="fa fa-check"></i>&nbsp;Terminar compra</a>
			</div>
		</div>

	</div>
</body>
<?php } ?>
<?php	
	$cupon1 = 'NUEVOUSUARIO';
	if(isset($_POST['acept'])){
	if(strcmp($cupon1,$_POST['cup'])==0){
		foreach($productos as $producto){
			 echo $nuevototal=$producto->precio*.5;
		}
	}
	}
					
					
			
				?>
<?php include_once "footer.php" ?>
