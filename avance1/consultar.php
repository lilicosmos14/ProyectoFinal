<?php
 include"int.html";
?>

<link rel="stylesheet" href="estilocosnulta.css">

<?php

	$servidor='localhost';
    $cuenta='root';
    $password='';
    $bd='produc';
     
    //conexion a la base de datos
    $conexion = new mysqli($servidor,$cuenta,$password,$bd);

	$sql = 'select * from articulos';
	$resultado = $conexion -> query($sql);
	
    $numPro = 0;
	?>
	
	<script> var array=[];</script>
	
	<?php

	 while( $fila = $resultado ->  fetch_assoc()){
        $imagen = $fila['nombre'];
        $producto = $fila['idprod'];
        $precio = $fila['precio'];
		 
	?>
	<script>
    array.push("<?php echo $producto ?>");
    
    </script>
   	
    <?php

    if ($conexion->connect_errno){
         die('Error en la conexion');
    }

    else{
		$sql = 'select * from articulos'; //hacemos cadena  con la sentencia mysql que consulte el id del producto
		$resultado = $conexion -> query($sql);
		
		if($resultado -> num_rows){  //si la consulta genera registros
			?>
			<div class="cards">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
				<?php
					while($fila=$resultado -> fetch_assoc()){ ?>
				<div class="card" style="width: 18rem;" id="shadow">
					<img src="img//<?php echo $fila['img']; ?>" class="card-img-top" id="img" alt="...">
					<div class="card-body">
						<h5 class="card-title"><?php echo $fila['idprod']." ".$fila['nombre'];?></h5>
						<p class="card-text"><?php echo $fila['descripcion']."<br>"."$".$fila['precio']." MXN"; ?></p>
						<button type="submit" class="btn btn-outline-success" name="submit" id="<?php echo $numPro ?>" onclick="agregar(this.id)">Agreagar al Carrito</button>
					</div>
				</div>
			</form>
			
			

<?php
				}
		}
	}


        $numPro = $numPro+1;
    }//fin while
?>

<script>
    console.log(array);    
    
    function agregar(id){
        var indice = parseInt(id);
        console.log(`Elegiste ${array[indice]}`);       
         
    }
    
</script>

