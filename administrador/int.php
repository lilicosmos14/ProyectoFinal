<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>MO'O REEKS</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!--Bootstrap-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<style type="text/css">
		.ocultar {
			display: none;
		}

		.mostrar {
			display: block;
		}

	</style>

</head>

<body>
	<nav class="navbar navbar-expand-sm navbar navbar-dark navbar sticky-top" style="background-color: black;">
		<a class="navbar-brand" href="index.php" style="padding-right: 100px;">
			<img src="../img/logoNav.jpg" alt="" class="d-inline-block align-text-top" width="100px"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="../tienda.php">Tienda</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="agregar.php">Altas</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="elimina.php">Bajas </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="modificar.php">Modificar</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="consultar.php">Productos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="graficas.php">Graficar</a>
				</li>
			</ul>
			<ul class="nav navbar-nav flex-row justify-content-between ml-auto">
				<li class="dropdown order-1">
					<?php
                        if(isset($_SESSION["usuario"])){  
                            echo'<div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;"> <i id="iconuser" class="far fa-user" style="font-size: 20px; color: #b3b2b2; margin-left: 5px; margin-right: 5px;"></i> Bienvenido(a) ' . $_SESSION["usuario"]; echo' </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="logout.php">Cerrar sesión</a>
                                </div>
                            </div>';      
                            }else{
                                echo'<button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Login <span class="caret"></span></button>';
                            }
                        ?>
					<ul class="dropdown-menu dropdown-menu-right mt-2">
						<li class="px-3 py-2">
							<div class="form-group">
								<a href="login.php" class="btn btn-primary btn-block">Iniciar Sesión</a>
							</div>
							<div class="form-group text-center">
								<small><a href="#" data-toggle="modal" data-target="#modalPassword">Registrar Cuenta</a></small>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>

	<div id="modalPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3>Registro</h3>
					<button type="button" class="close font-weight-light" data-dismiss="modal" aria-hidden="true">×</button>
				</div>

				<div id="msg"></div>
				<!-- Mensajes de Verificación -->
				<div id="error" class="alert alert-danger ocultar" role="alert">
					Las Contraseñas no coinciden, vuelve a intentar !
				</div>
				<div id="ok" class="alert alert-success ocultar" role="alert">
					Las Contraseñas coinciden ! (Procesando formulario ... )
				</div>
				<!-- Fin Mensajes de Verificación -->

				<form class="form form-group" role="form" action="registro.php" onsubmit="verificarPasswords(); return false" method="post">
					<div class="modal-body">

						<p>Nombre Completo: <br><input type="text" class="form-control" name="nombre"></p>
						<p>Usuario: <br><input type="text" name="login" class="form-control"> </p>
						<p>Correo Electronico: <br><input type="email" class="form-control" name="email"></p>
						<p>Contraseña: <br><input type="password" class="form-control" name="contra" id="pass1" required> </p>
						<p>Confirmar Contraseña: <br><input type="password" class="form-control" name="contra" id="pass2" required> </p>
					</div>
					<div class="modal-footer">
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block" id="registro.php">Registrarse</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="js/funciones.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
	</script>
</body>

</html>
