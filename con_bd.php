<?php
include_once "funciones.php";

	$arrPuestos=array ("Mexico"=>'Mexico', "USA"=>'USA', "Canada"=>'Canada');
	$arrMetodo =array("oxxo"=>'oxxo', "tarjeta"=>'tarjeta');
	

                $nom = $_POST['name'];
                $email =$_POST['email'];
                $dir =$_POST['direccion'];
                $ciu =$_POST['ciudad'];
			 	$pais =$_POST['pais'];
			 	$cod =$_POST['codigo'];
			 	$tel = $_POST['telefono'];
			 	$met = $_POST['metodo'];
                
			 	$idpais= array_search($pais,$arrPuestos); 
			 	$metodo =array_search($met,$arrMetodo);
                //hacemos cadena con la sentencia mysql para insertar datos
               
				

	 $datos = array("nombre"=>$nom, "email"=>$email, "direccion"=>$dir, "ciudad"=>$ciu, "pais"=>$idpais, "codigo"=>$cod, "telefono" =>$tel, "metodo" => $metodo);
	




$productos = obtenerProductosEnCarrito();
?>
<!--Bootstrap-->
<link rel="stylesheet" href="css/style2.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

<!--CDN Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Aladin&family=Chivo:wght@700&family=Ubuntu:wght@500&display=swap" rel="stylesheet">

<!--CDN FontAwesome -->
<script src="https://kit.fontawesome.com/1591f89edb.js" crossorigin="anonymous"></script>
<center>
<div class="columns" id="pedido">
	<div class="column">
		<h2 class="is-size-2" style="text-align:center;">NOTA DE COMPRA</h2>
		<table class="table">
			<thead>
				<tr>
					<th>Producto</th>
					<th>Nombre</th>
					<th>Descripción</th>
					<th>Precio</th>
				</tr>
			</thead>
			<tbody>
				<?php
					//$cantidad = $_POST['select'];
                    $total = 0;
				  	$envio = 0;
				  	$taxes = 0;
				  	$subtotal = 0;
				  	$envioInter = 0.05;
				  	$iva = 0.16;
				  	$tax = 0.12;
				  	$nuevousuario = 0.5;
				  	$navidad = 0.3;
				  	$subtotal1 =0;
				  $subtotal2=0;
				  $subtotal3=0;
                    foreach ($productos as $producto) {
                        $total += $producto->precio;
                    ?>
				<tr>
					<td><img src="img/productos/<?php echo $producto->imagen ?>" alt="" width="100px"></td>
					<td><?php echo $producto->nombre ?></td>
					<td><?php echo $producto->descripcion ?></td>

					<td>$<?php echo number_format($producto->precio, 2) ?></td>
				
					<?php } ?>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="3" class="is-size-4 has-text-right"><strong>Total</strong></td>
					<td colspan="3" class="is-size-4" id="totla">
						$<?php echo number_format($total,2) ?>
					</td>
				</tr>
				<tr>
					<td colspan="3" class="is-size-4 has-text-right"><strong>Impuestos</strong></td>
					<td colspan="3" class="is-size-4" id="iva">
						<p id="tax">+$<?php echo number_format(($total*$iva),2) ?></p>
					</td>
				</tr>
				<tr>
					<td colspan="3" class="is-size-4 has-text-right"><strong>Envio</strong></td>
					<td colspan="3" class="is-size-4" id="iva">
						<p id="envio">+$<?php echo number_format(($total*$envioInter),2) ?></p>
					</td>
				</tr>
				
				<tr>
					<td colspan="3" class="is-size-4 has-text-right"><strong>Subtotal</strong></td>
					<td colspan="3" class="is-size-4" id="iva">
						<?php
								$subtotal1 = $total*0.16;
				  				$subtotal2 = $total*0.05;
				  				
				  				$subtotal = ($total+$subtotal1+$subtotal2);
								?>
						<p id="sub">$<?php echo number_format($subtotal,2) ?></p>
					</td>
				</tr>

			</tfoot>
		</table>
		<div>
		<h3>Datos de envio</h3>
			<?php echo "Enviar a: ".$datos["nombre"].'<br>';
				  echo "Direccion: ".$datos["direccion"].', '.$datos['ciudad'].', '.$datos['codigo'].', '.$datos['pais'].'<br>';
				  echo "Telefono: ".$datos['telefono'].'<br>';
				  echo "Metodo de pago: ".$datos['metodo'];
							?>
		</div>
	</div>
	</div>
</center>
