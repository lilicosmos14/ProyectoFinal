<?php
    include "menu.php";
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
        

<div class="form container mt-3">
<div id="recuperarclave">
        <h1 class="text-center recuperarPass">
            Recuperar tu Clave
        </h1>

        <form action="recuperarClave.php" method="post">
            <div class="field-wrap">
                <label>Correo</label>
                <input type="email" name="email"  required autocomplete="off"/>
            </div>
            
            <input type="submit" id="enviar" name="enviar" class="button button-secondary" value="RECUPERAR CLAVE"/>

            <a href="login.php" id="volver" class="mt-3 mb-4" title="Volver">Volver</a>
            <br><br>
        </form>
    </div>
</div>

<?php
    include "footer.html";
?>