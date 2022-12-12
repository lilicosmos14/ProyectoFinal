<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php 
    if(isset($_POST['enviar'])){
        if(!empty( !empty($_POST['email'] ) )){
                $variable2=$_POST['email'];
                $header="De: reeksmoo@gmail.com"."\r\n";
                $header2="Gracias por suscribirte"."\r\n";
                $cuerpo ="El quipo de Moo Reeks te agradece la confianza"."\r\n";
				$cuerpo.="El codigo de tu cupon: NUEVOUSUARIO"."\r\n";
				$cuerpo.="Disfruta tu cupon cuando quieras"."\r\n";
				
                $email=@mail($variable2,$header2,$header,$cuerpo);

                if($email){
                    echo  "<script>
                    function validar(){
                        swal('Correo enviado!', 'Revise su bandeja de entrada para visualizar el correo!', 'success');
                        
                    }
                </script>";
                }
                else{
                  echo  "<script>
                  function validar(){
                      swal('Error!', 'El correo no pudo se mandado correctamente!', 'error');
                  }
              </script>";
                }
        }
    }
?>