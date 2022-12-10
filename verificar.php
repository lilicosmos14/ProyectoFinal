<?php
    session_start();
    if(strcasecmp($_SESSION['captcha'], $_POST['securityCode']) != 0){
            header("Location:login.php?errorEmail=1");
        }else{    
        $acum=0;

        $ip=$_SERVER['REMOTE_ADDR'];
        $captcha=$_POST['g-recaptcha-response'];
        $secretkey='6LeC3uEiAAAAAKAGucp4WJdDgt4fAoR92fhgelRS';

        $respuesta= file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");

        $atributos= json_decode($respuesta, TRUE);
        if(!$atributos['success']){
            echo "<h2 style='color:green;'><br> Verificar reCaptcha</h2>";
        }
        
        $usuario = $_REQUEST["usuario"];
        $palabra_secreta = $_POST["palabra_secreta"];
        
        
        if(!empty($_POST["remember"])){
            setcookie ("usuario",$_POST["usuario"],time()+3600);
            setcookie ("palabra_secreta",$_POST["palabra_secreta"],time()+3600);
            
        }    
        
        $conn = new mysqli("localhost","id19983707_root","H{t(VHuznLE0qm*R","id19983707_usuarios");
        if($conn->connect_errno){
            echo "No hay conexion: (".$conn->connect_errno.")".$conn->connect_error;
        }
        $quearyusuario = mysqli_query($conn,"SELECT * FROM usuarios WHERE Cuenta = '$usuario'" );
        try{
            $nr = mysqli_num_rows($quearyusuario);
            $buscarpass = mysqli_fetch_array($quearyusuario);
            
            if(isset($_COOKIE["block".$usuario])){
                echo "<div class='alert alert-warning'>
                        <strong>Peligro!</strong> EL usuario ha sido bloqueado por 3 minutos
                      </div>";
                echo "<br><a href='login.php'><button type='button' class='btn btn-secondary'>Regresar</button></a>";
                echo "<br><a href='formulario.php'><button type='button' class='btn btn-secondary'>Recuperar Contraseña</button></a>";
            }else{
                //INICIO DE SESION ADMIN
                if($usuario=="Administrador"){
                    if($nr == 1 &&(password_verify($palabra_secreta,$buscarpass['Contraseña']))){
                        echo "<div class='alert alert-secondary' role='alert'> Bienvenido Administrado ¿Listo para continuar? <a href='#' class='alert-link'></a></div>";
                        //ANDRES, AQUI CAMBIAS EL HREF AL QUE HAYAS PHP QUE HAYAS HECHO PARA EL ADMIN
                        echo "<br><a href=' '><button type='button' class='btn btn-secondary'>Continuar</button></a>";
                    }else{
                        echo "<div class='alert alert-secondary' role='alert'> Usuario o contraseña equivocados <a href='#' class='alert-link'></a></div>";
                        echo "<br><a href='login.php'><button type='button' class='btn btn-secondary'>Regresar</button></a>";
                    }
                }else{
                if($nr == 1 &&(password_verify($palabra_secreta,$buscarpass['Contraseña']))){
                    $micarrito=[];

                    $_SESSION["usuario"] = $usuario;
                    $_SESSION["compras"] = $micarrito;

                    # Luego redireccionamos a la pagina "Secreta"
                    header("Location: inicio.php");
                }else{
                    if(isset($_COOKIE["$usuario"])){
                        $cont = $_COOKIE["$usuario"];
                        $cont++;
                        setcookie($usuario,$cont,time()+ 3600);
                        if($cont>=3){
                            setcookie("block".$usuario,$cont,time()+180);
                        }
                    }else{
                        setcookie($usuario,1,time()+3600);
                    }
                    header("Location:login.php?errorEmail=1");
                }
            }
            }
        }catch(Exception $ex){
            
        }
    }
?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
