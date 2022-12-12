<?php
 include"int.php";
?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!--Bootstrap-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<body>
	
	<div class="contenedor">
		<div class="row">
			<div class="col-4" style="margin: 0 auto;">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
					<h2 style="text-align:center">Registro de Articulos</h2>
					<div class="form-group">
						<label for="id">ID Articulo</label>
						<input type="number" name="idprod" class="form-control" id="idprod" placeholder="">
					</div>
					<div class="form-group">
						<label for="id">Nombre</label>
						<input type="text" class="form-control" name="nombre" id="nombre" placeholder="">
					</div>
					<div class="form-group">
						<label for="cat">Categoria</label>
						<input type="text" id="categoria" name="categoria" class="form-control" placeholder=" ">
					</div>
					<div class="form-group">
						<label for="contra">Descripcion</label>
						<textarea name="descripcion" type="text" class="form-control" id="descripcion" placeholder=""></textarea>
					</div>
					<div class="form-group">
						<label for="desc">Existencia</label>
						<input type="number" class="form-control" name="existencia" id="existencia" placeholder="">
					</div>
					<div class="form-group">
						<label for="desc">Precio</label>
						<input type="number" class="form-control" name="precio" id="precio" placeholder="">
					</div>

					<div class="form-group">
						<label for="img"> Agrega Imagen</label>
						<input type="file" class="form-control" name="img" id="img">
					</div>
					<button type="submit" class="btn btn-outline-success" name="submit">Agreagar</button>


				</form>
			</div> <!-- fin col -->
		</div> <!-- fin row -->
	</div> <!-- fin container -->
	<br><br>
</body>


<?php
	$servidor = 'localhost';
	$cuenta= 'id19984230_tienda';
	$password='t81Wr#D0g%C5E<oX';
	$bd='id19984230_mooreeks';
     
     
    //conexion a la base de datos
    $conexion = new mysqli($servidor,$cuenta,$password,$bd);

    if ($conexion->connect_errno){
         die('Error en la conexion');
    }

    else{
         //conexion exitosa

         /*revisar si traemos datos a insertar en la bd  dependiendo
         de que el boton de enviar del formulario se le dio clic*/

         if(isset($_POST['submit'])&& !empty($_POST['idprod'])){
                //obtenemos datos del formulario
                $id = $_POST['idprod'];
                $nom =$_POST['nombre'];
                $cat =$_POST['categoria'];
                $des =$_POST['descripcion'];
			 	$exi =$_POST['existencia'];
			 	$pre =$_POST['precio'];
			 	$img = $_POST['img'];
                
                //hacemos cadena con la sentencia mysql para insertar datos
                $sql = "INSERT INTO productos (idprod, nombre, categoria, descripcion, existencia, precio, imagen) VALUES('$id','$nom','$cat','$des', '$exi', '$pre','$img')";
                $conexion->query($sql);  //aplicamos sentencia que inserta datos en la tabla usuarios de la base de datos
                if ($conexion->affected_rows >= 1){ //revisamos que se inserto un registro
                    echo '<script> alert("registro insertado") </script>';
                }//fin
		 }
	}
		
		?>


<?php include("../footer.php");?>