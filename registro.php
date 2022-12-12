<?php
     $conn = new mysqli("localhost","id19984230_tienda","t81Wr#D0g%C5E<oX","id19984230_mooreeks");
    if($conn->connect_errno){
        echo "No hay conexion: (".$conn->connect_errno.")".$conn->connect_error;
    }
    mt_srand (time());
    $id= mt_rand(0,999999);
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $usuario = $_POST["login"];
    $contra = $_POST["contra"];

    $pass_fuerte = password_hash($contra,PASSWORD_DEFAULT);
    $queryregistrar = "INSERT INTO usuarios(Id,Nombre,Cuenta,Correo,Contraseña,Bloqueo) values('$id','$nombre','$usuario','$email','$pass_fuerte','1')";
    if(mysqli_query($conn,$queryregistrar)){
        echo "<div class='alert alert-secondary' role='alert'> Bienvenido ".$usuario." Estas Registrado! <a href='#' class='alert-link'></a></div>";
        echo "<br><a href='index.php'><button type='button' class='btn btn-secondary'>Regresar</button></a>";
    }else{
        echo "<div class='alert alert-secondary' role='alert'> No se a podido establecer la conexion <a href='#' class='alert-link'></a></div>";
        echo "<br><a href='index.php'><button type='button' class='btn btn-secondary'>Regresar</button></a>";;
    }
     
    /*$file = fopen("usuarios.txt","a+",);
     
    fwrite($file, "\n".$usuario."-".$contra."-".$email."-".$nombre);
    
    fclose($file);
    echo "<div class='alert alert-secondary' role='alert'> Bienvenido ".$usuario." Estas Registrado! <a href='#' class='alert-link'></a></div>";

    echo "<br><a href='index.php'><button type='button' class='btn btn-secondary'>Regresar</button></a>";*/

?>
