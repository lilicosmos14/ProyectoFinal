<?php
    include "menu.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Moo Reeks</title>

	<!--Estilos CSS-->
	<link rel="stylesheet" href="css/style2.css">
	<link rel="stylesheet" href="css/suscribirse.css">

	<!--Bootstrap-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>
	<section class="carrusel" id="inicio" style="text-align:center;;">
		<div class="slideshow-container">
			<div class="mySlides fade">
				<div class="numbertext">1 / 3</div>
				<img src="img/slide1.jpg" style="width:100%">

			</div>

			<div class="mySlides fade">
				<div class="numbertext">2 / 3</div>
				<img src="img/slide2.jpg" style="width:100%">
				<a href="navidad.php"><button class="botonnav" id="navidad">VISITAR</button></a>

			</div>

			<div class="mySlides fade">
				<div class="numbertext">3 / 3</div>
				<img src="img/slide3.jpg" style="width:100%">
				<button type="submit" id="cupo">CUPON</button>

			</div>

		</div>
		<br>

		<div style="text-align:center">
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
		</div>

		<script>
			let slideIndex = 0;
			showSlides();

			function showSlides() {
				let i;
				let slides = document.getElementsByClassName("mySlides");
				let dots = document.getElementsByClassName("dot");
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";
				}
				slideIndex++;
				if (slideIndex > slides.length) {
					slideIndex = 1
				}
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex - 1].style.display = "block";
				dots[slideIndex - 1].className += " active";
				setTimeout(showSlides, 2000); // Change image every 2 seconds
			}

		</script>
	</section>

	<br><br>
	<section class="seccion2">
		<div class="sec2">
			<div class="hombre">
				<img src="img/HOMBRE.jpg" alt="" width="300px" id="men">
				<a href="pagH.php"><button class="boton" id="bb">Visitar</button></a>
				<div id="letras" class="letras">PRENDAS SOLO PARA ELLXS</div>
			</div>
			<div class="accesorio">
				<img src="img/ACCESORIOS.jpg" alt="" width="300px" id="men">
				<a href="pagA.php"><button class="boton" id="bb">Visitar</button></a>
				<div id="letras" class="letras">GRAN VARIEDAD DE ACCESORIOS</div>
			</div>
			<div class="mujer">
				<img src="img/MUJER.jpg" alt="" width="300px" id="men">
				<a href="pagM.php"><button class="boton" id="bb">Visitar</button></a>
				<div id="letras" class="letras">LO ULTIMO EN MODA</div>
			</div>
		</div>
	</section class="seccion3" style="background-color:#e6af91;">
		<div>
		<center>
		<h3>REVISA NUESTRA VARIEDAD DE ARTICULOS</h3>
			<div class="media">
				<div class="video">
					<video src="img/media/y2mate.com%20-%20COMERCIAL%20DE%20ROPA_360p.mp4" width="600px" autoplay></video>
				</div>
				<div class="info" >
				<h2>Para él, para ella, para todo el mundo</h2>
					<a href="tienda.php"><button type="submit" class="boton">Visitar</button></a>
				</div>
			</div>
		</center>
			
		</div>
	</section>


	<section class="seccion5">

		<div class="sec5">
			<br>
			<img src="img/f7f-plantilla-tienda-ropa-editar-gratis.jpg-840.jpg" alt="" id="imag">

			<div class="flexbox-item-2">

				<p id="texto">
					<font size="+2">SUSCRIBETE AHORA!</font>

				<div class="formulario">
					<form action="enviarcupon.php" class="form" method="post">

						<div class="inputContainer">
							<input type="text" class="input" placeholder=Nombre>
							<label for="" class="label">Nombre</label>
						</div>

						<div class="inputContainer">
							<input type="email" class="input" placeholder="Email" name="email">
							<label for="" class="label">Email</label>
						</div>


						<button type="submit" name="enviar" class="boton">Suscribirse</button>
					</form>
				</div>
			</div>
			<br>
		</div>

	</section>
</body>


<?php include("footer.php"); ?>

</html>
