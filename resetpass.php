<link rel="stylesheet" href="css/estilosIndex.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&family=Silkscreen&family=Stick+No+Bills:wght@800&display=swap" rel="stylesheet">
<?php
include "menu.php";
if($_POST["resetSubmit"]){
    $OldPass = $_POST["OldPass"];
    $Pass1 = $_POST["Pass1"]; 
    $Pass2 = $_POST["Pass2"];
    $conn = new mysqli("localhost","id19984230_tienda","t81Wr#D0g%C5E<oX","id19984230_mooreeks");
    if($conn->connect_errno){
        echo "No hay conexion: (".$con->connect_errno.")".$con->connect_error;
    }
    
        $quearyusuario = mysqli_query($conn,"SELECT * FROM usuarios WHERE Contraseña = '$OldPass'" );
        $nr = mysqli_num_rows($quearyusuario);
        $buscarpass = mysqli_fetch_array($quearyusuario);
    if($nr == 1 && $OldPass==$buscarpass['Contraseña']){
        if($Pass1 == $Pass2){
            $pass_fuerte = password_hash($Pass1,PASSWORD_DEFAULT);
            $update = mysqli_query($conn,"UPDATE usuarios SET Contraseña ='$pass_fuerte' WHERE Contraseña = '$OldPass'");
            if($update){
                echo "<div class='alert alert-secondary' role='alert'> Se a actualizado tu contraseña<a href='#' class='alert-link'></a></div>";
                echo "<br><a href='index.php'><button type='button' class='btn btn-secondary'>Ir a la pagina principal</button></a>";
            }
        }else{
            echo "<div class='alert alert-secondary' role='alert'> Tus contraseñas no coinciden <a href='#' class='alert-link'></a></div>";
            echo "<br><a href='formulario.php'><button type='button' class='btn btn-secondary'>Ir a la pagina principal</button></a>";
        }
    }else{
        echo "<div class='alert alert-secondary' role='alert'> Tu contraseña actual no coincide <a href='#' class='alert-link'></a></div>";
        echo "<br><a href='formulario.php'><button type='button' class='btn btn-secondary'>Ir a la pagina principal</button></a>";
    }
}
include "footer.php";
?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>