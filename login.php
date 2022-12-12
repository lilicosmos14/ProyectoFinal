<?php
    include "menu.php";
?>

<head>
    <meta charset="UTF-8">
    <title>MO'O REEKS</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="img/favicon%20(1).ico">
    
    <!--Bootstrap-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/estilologin.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="js/load_captcha.js"></script>
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
                <input name="usuario" id="usuario" placeholder="Usuario" class="form-control form-control-sm" type="text" required="" value="<?php if(isset($_COOKIE["usuario"])) {echo $_COOKIE["usuario"]; } ?>">
            </div>
            <div class="form-group">
                <input name="palabra_secreta" id="palabra_secreta" placeholder="Password" class="form-control form-control-sm" type="password" required="" value="<?php if(isset($_COOKIE["palabra_secreta"])) {echo $_COOKIE["palabra_secreta"]; } ?>">
            </div>
            <div class="form-group">
				<input type="text" name="securityCode" id="securityCode" class="form-control" placeholder="Código de seguridad">
			</div>
			<div class="form-group">								
				<label class="col-md-4 control-label">	<img style="border: 1px solid #D3D0D0" src="get_captcha.php?rand=<?php echo rand(); ?>" id='captcha'></label>
                <a href="javascript:void(0)" id="reloadCaptcha" class="btn btn-light">Recargar codigo</a>  
            
			</div>
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
                <a href="recuperar.php" id="olvidar" title="Recuperar Clave" class="btn btn-success">Recuperar Clave</a>
            </div>
        </div>    
    </form>
    </div>
    </div>
</div>
   
<?php
    include "footer.php";
?>
