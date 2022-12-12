	<h3>Metodos de Pago</h3>
		<center>
			<img src="imagenes/visamaster.jpg" alt="" height="60" width="150">
		</center>
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
				<div class="col-auto">
					<label for="inputPassword6" class="col-form-label">Fecha de vencimiento</label>
				</div>
				<div class="col-auto">
					<input type="password" id="fecha" class="form-control" aria-describedby="passwordHelpInline" placeholder="MM/AA" required>
				</div>
				<button class="btn btn-outline-success" type="submit" name="pagar">Pagar</button>
				<input type="submit" name="pagar">
			</div>
		</center>
		<h3>Pago en oxxo</h3>
		<img src="imagenes/Oxxo_Logo.svg.png" alt="" height="300" width="600">
		<button class="btn btn-outline-success" type="submit">Pagar</button>
	</div>