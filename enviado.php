<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php 
    if(isset($_POST['enviar'])){
        if(!empty( !empty($_POST['email'] ) )){
                $variable2=$_POST['email'];
                $header="De: reeksmoo@gmail.com"."\r\n";
                $header2="Gracias por escribirnos."."\r\n";
                $cuerpo="Te atenderemos con la brevedad posible, pronto tendremos una respuesta a tus preguntas."."\r\n";
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
