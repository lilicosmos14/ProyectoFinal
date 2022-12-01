<?php

session_start();

if (empty($_SESSION["usuario"])) {
    # Lo redireccionamos al formulario de inicio de sesión
    header("Location: index.php");
    # Y salimos del script
    exit();
} 

 

include ("menu.php");
$hora=date("h");

if($hora<12)
    $d="dias";
elseif($hora<18)
    $d="tardes";
    else
        $d="noches";
?>
<div class="card w-75" >
  <div class="card-body"  style="text-align:center;">
    <h5 class="card-title">Buenos <?php echo $d; ?> </h5>
    <p class="card-text"><?php echo "Bienvenido(a) ". $_SESSION["usuario"]; ?> </p>
    <a href="index.php" class="btn btn-primary">Iniciar Navegación</a>
  </div>
</div>