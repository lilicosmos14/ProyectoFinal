<?php
$con = new mysqli("localhost","id19772720_root","^ypH0|r[n&i0/Pfx","id19772720_usuarios");
if($con->connect_errno){
    echo "No hay conexion: (".$con->connect_errno.")".$con->connect_error;
}
//Generando clave aleatoria
$logitudPass = 4;
$miPassword  = substr( md5(microtime()), 1, $logitudPass);
$clave       = $miPassword;

$correo             = trim($_REQUEST['email']); //Quitamos algun espacio en blanco
$consulta           = ("SELECT * FROM usuarios WHERE Correo ='".$correo."'");
$queryconsulta      = mysqli_query($con, $consulta);
$cantidadConsulta   = mysqli_num_rows($queryconsulta);
$dataConsulta       = mysqli_fetch_array($queryconsulta);

if($cantidadConsulta ==0){ 
    header("Location:login.php?errorEmail=1");
    exit();
}else{
    if(isset($_POST['enviar'])){
        if(!empty( !empty($_POST['email'] ) )){
            $pass_fuerte = password_hash($clave,PASSWORD_DEFAULT);
            $updateClave    = ("UPDATE usuarios SET Contraseña='$clave' WHERE Correo='".$correo."' ");
            $queryResult    = mysqli_query($con,$updateClave); 
                $variable2=$_POST['email'];
                    $header="De: MooReeks@gmail.com"."\r\n";
                $header2="Recuperacion de clave."."\r\n";
                $cuerpo="Te hemos creado una nueva clave temporal para que puedas iniciar sesión, la clave temporal es: $clave "."\r\n";
                $email=@mail($variable2,$header2,$header,$cuerpo);

            if($email){
                    echo  "<div class='alert alert-info'>
                            <strong>Enviado!</strong> Revise su bandeja de entrada para que pueda visualizar su correo y proceda al formulario
                        </div>";
                    echo "<br><a href='formulario.php'><button type='button' class='btn btn-secondary'>Regresar</button></a>";
                
            }
        }

        
    }
}

?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
