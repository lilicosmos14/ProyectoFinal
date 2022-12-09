<?php
    include "menu.php";
?>

<head>
  <title>MO'O REEKS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilosIndex.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&family=Silkscreen&family=Stick+No+Bills:wght@800&display=swap" rel="stylesheet">
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<div style="margin: 3%;">
  <h2 style="text-align: center">Comunicate con nosotros</h2>
  <form action="enviado.php" onsubmit="validar(); return false" method="post">
    <div class="container mt-3">
        <div class="mb-3 mt-3 was-validated">
          <label for="uname" class="form-label">Nombre(s):</label>
          <input type="text" class="form-control" name="nombre" required>
          <div class="valid-feedback">Valido.</div>
          <div class="invalid-feedback">Por favor, rellene este campo.</div>
        </div>
        <div class="mb-3 mt-3 was-validated">
          <label for="uname" class="form-label">Apellidos:</label>
          <input type="text" class="form-control" name="apellidos" required>
          <div class="valid-feedback">Valido.</div>
          <div class="invalid-feedback">Por favor, rellene este campo.</div>
        </div>
        <div class="mb-3 mt-3">
          <label for="comment">Sugerencia/Opinion:</label>
          <textarea class="form-control" rows="5" name="opinon"></textarea>
        </div>
        <div class="mb-3 mt-3 was-validated">
          <label for="email">Email:</label>
          <input type="email" class="form-control" placeholder="ejemplo@example.com" name="email" required>
          <div class="valid-feedback">Valido.</div>
          <div class="invalid-feedback">Por favor, rellene este campo.</div>
        </div>
        <button type="submit" name="enviar" id="enviar" class="btn btn-secondary" value="enviar">Enviar</button>
    </div>
  </form>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3701.560615553795!2d-102.3147087!3d21.912989300000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1669058694664!5m2!1ses-419!2smx" width="700" height="400" style="margin-left:20%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<br>
<br>
<br>

<?php
  include "footer.html";
?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>