<?php
include "menu.php";
?>
<link rel="stylesheet" href="css/estilosIndex.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&family=Silkscreen&family=Stick+No+Bills:wght@800&display=swap" rel="stylesheet">
<h2>restablecer la contraseña de tu cuenta</h2>
<div class="container">
    <div class="regisFrm">
        <form action="resetpass.php" method="post">
            <label>Contraseña Actual</label>
            <input type="password" name="OldPass" placeholder="Contraseña actual" required="">
            <label>Contraseña Nueva</label>
            <input type="password" name="Pass1" placeholder="Contraseña nueva" required="">
            <label>Confirmar Contraseña</label>
            <input type="password" name="Pass2" placeholder="Confirmar contraseña" required="">
            <div class="send-button">
                <input type="submit" name="resetSubmit" value="RESET PASSWORD">
            </div>
        </form>
    </div>
</div>

<?php
include "footer.html";
?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>