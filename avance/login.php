<?php
    include "menu.php";
?>
<?php
function randomText($lenght){
    $key="";
    $pattern="1234567890abcdefghijklmnopqrstuvwxyz";
    for($i=0;$i<$lenght;$i++){
        $key .= $pattern[rand(0,35)];
    }
    return $key;
}

$captcha=randomText(6);
//echo "captcha generado: ". $captcha;

?>

<head>
    <meta charset="UTF-8">
    <title>MO'O REEKS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="imagenes/favicon%20(1).ico">
    <link rel="stylesheet" href="css/estilologin.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<?php
    include ("msjs.php");
?>
<div class="formulario">
    <div id="form">
    <div id="singup">
    <h2 style="text-align: center">INGRESA TUS DATOS</h2>
    <form class="form" action="verificar.php" method="post">
        <div class="container mt-3">
            <div class="form-group">
                <input name="usuario" id="emailInput" placeholder="Usuario" class="form-control form-control-sm" type="text" required="" value="<?php if(isset($_COOKIE["usuario"])) {echo $_COOKIE["usuario"]; } ?>">
            </div>
            <div class="form-group">
                <input name="palabra_secreta" id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="password" required="" value="<?php if(isset($_COOKIE["palabra_secreta"])) {echo $_COOKIE["palabra_secreta"]; } ?>">
            </div>
            <p>
                Ingresar texto: <span id="captcha"><?php echo $captcha ?></span><br>
                <input name="respuesta" type="text" sixe="6">
                <input type="hidden" name="captcha" value="<?php echo $captcha ?>">
            </p>
            <p>
                <input type="checkbox" name="remember" /> Recordar contraseña del usuario
            </p>
            <div class="mb-3" style="padding: left 15%;">
                <div style="padding-left: 50px;" class="g-recaptcha" data-sitekey="6LeC3uEiAAAAAFnWU_cl8BrR19EMwAB9OFQKKutd">
                </div>
            </div>    
            <div class="form-group">
                <button type="submit" name="acceder" class="btn btn-primary btn-block">Iniciar Sesión</button>
                <br>
                <a href="recuperar.php" id="olvidar" title="Recuperar Clave">Recuperar Clave</a>
            </div>
        </div>    
    </form>
    </div>
    </div>
</div>
   
<?php
    include "footer.html";
?>
