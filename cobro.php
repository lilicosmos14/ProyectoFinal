<?php
include "menu.php";
?>
<link rel="stylesheet" href="css/estilosIndex.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&family=Silkscreen&family=Stick+No+Bills:wght@800&display=swap" rel="stylesheet">
<div class="container-sm">
<div class="container-sm">
<h3 text-align="center">¿A donde enviamos tu pedido?</h3>
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
  <input type="text" class="form-control" id="direccion" placeholder="Calle/Int/Ext/Col" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput4" class="form-label">Ciudad</label>
  <input type="text" class="form-control" id="ciudad" placeholder="">
</div>
<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"required>
  <option selected>Pais</option>
  <option value="1">México</option>
  <option value="2">Estados Unidos</option>
  <option value="3">Canadá</option>
</select>
<div class="mb-3">
  <label for="exampleFormControlInput5" class="form-label">Codigo Postal</label>
  <input type="text" class="form-control" id="codigo" placeholder="" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput4" class="form-label">Numero Telefonico</label>
  <input type="text" class="form-control" name="telefono" placeholder="+52 000-000-0000" required>
</div>
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
</div>



<?php
include "footer.html";
?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>