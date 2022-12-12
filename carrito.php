 <link rel="stylesheet" href="css/style2.css">
 
 <div class="button">
 	<a href="verCarrito.php" class="button is-success">
 		 <?php
         	include_once "funciones.php";
			$conteo = count(obtenerIdsDeProductosEnCarrito());
			if ($conteo > 0) {
				printf("(%d)", $conteo);
			}
		?>&nbsp;<i class="fa fa-shopping-cart"></i>
 	</a>
