<?php
include "menu.php";
include "terminarcompra.php";
?>
<link rel="stylesheet" href="css/estilosIndex.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&family=Silkscreen&family=Stick+No+Bills:wght@800&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



<script>
	function myFunction() {
		var option_value = document.getElementById("metodo").value;
		if (option_value == "tarjeta") {
			//  alert("Hai !");
			$("#myModal").modal();
		} else if (option_value == "oxxo") {
			$("#myModal2").modal();
		}

	}

</script>


<div class="container-sm">
	<div class="container-sm">
		<h3 text-align="center">¿A donde enviamos tu pedido?</h3>
		<form action="con_bd.php" method="post">
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label">Nombre Completo</label>
				<input type="name" class="form-control" name="name" placeholder="Nombre(s) Apellido(s)" required>
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput2" class="form-label">E-mail (Tu privacidad es nuestra prioridad)</label>
				<input type="e-mail" class="form-control" name="email" placeholder="name@example.com" required>
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput3" class="form-label">Dirección</label>
				<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Calle/Int/Ext/Col" required>
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput4" class="form-label">Ciudad</label>
				<input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="" required>
			</div>
			<select class="form-select form-select-lg mb-3" name="pais" aria-label=".form-select-lg example" required>
				<option selected>Pais</option>
				<option value="Mexico">Mexico</option>
				<option value="USA">Estados Unidos</option>
				<option value="Canada">Canada</option>
			</select>
			<div class="mb-3">
				<label for="exampleFormControlInput5" class="form-label">Codigo Postal</label>
				<input type="text" class="form-control" id="codigo" placeholder="" required name="codigo">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput4" class="form-label">Numero Telefonico</label>
				<input type="text" class="form-control" name="telefono" placeholder="+52 000-000-0000" required>
			</div>
			<div>
				<label for="exampleFormControlInput" class="form-label">Metodo de pago</label>
				<select class="form-select form-select-lg mb-3" name="metodo" aria-label=".form-select-lg example" id="metodo" onchange="myFunction()" required>
					<option selected>Metodo de pago</option>
					<option value="oxxo" id="oxxo">oxxo</option>
					<option value="tarjeta" id="tarjeta">Tarjeta</option>
				</select>
			</div>
			<div>
				<button type="button" class="boton" onclick="alert('Informacion Guardada')">Guardar</button>
				<button type="submit" name="bot" class="boton">Finalizar Compra</button>

			</div>
		</form>

		<br><br>

	</div>

</div>



<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Pago con Tarjeta</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>

			</div>
			<div class="modal-body">
				<img src="img/logotarjetas.png" alt="" width="50px;">

				<div class="mb-3">
					<label for="exampleFormControlInput4" class="form-label">Ingrese el numero de cuenta</label>
					<input type="text" class="form-control" id="cuenta" placeholder="0000-0000-0000-0000" required>
				</div>
				<center>
					<div class="row g-3 align-center">
						<div class="col-auto">
							<label for="inputPassword6" class="col-form-label">CVV</label>
						</div>
						<div class="col-auto">
							<input type="password" id="cvv" class="form-control" aria-describedby="passwordHelpInline" placeholder="000" required>
						</div>
					</div>
					<div class="row g-3 align-center">
						<div class="col-auto">
							<label for="inputPassword6" class="col-form-label">Fecha de vencimiento</label>
						</div>
						<div class="col-auto">
							<input type="password" id="fecha" class="form-control" aria-describedby="passwordHelpInline" placeholder="MM/AA" required>
						</div>
					</div>
				</center>
			</div>
			<div class="modal-footer">
				<button type="button" class="boton" data-dismiss="modal">Aceptar</button>
			</div>
		</div>

	</div>
</div>
<div class="modal fade" id="myModal2" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">PAGO EN OXXO</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>

			</div>
			<div class="modal-body">
				<center>
					<img src="img/Oxxo_Logo.svg.png" width="50px;" alt="">
					<label for="">Numero de Referencia</label>
					<br>
					<hr>
					<label for="">000-985-325-154</label>
				</center>
			</div>
			<div class="modal-footer">
				<button type="button" class="boton" data-dismiss="modal">Aceptar</button>
			</div>
		</div>

	</div>
</div>


<div>

	<?php
include "footer.php";
?>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>