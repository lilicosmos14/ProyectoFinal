<?php
include "menu.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MO'O REEKS</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="img/favicon%20(1).ico">
    
    <!--Bootstrap-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&family=Silkscreen&family=Stick+No+Bills:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid container mt-3">
    <div class="row">
    <h2 style="text-align: center">PREGUNTAS FRECUENTES</h2>
        <div class="col-sm-6 p-3">
            <div  class="accordion" id="accordionExample">
                <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne">
                    ¿Cuanto tarda el envio?
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>De 3 a 5 dias habiles</strong>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                >
                    ¿Como puedo consultar el estado de mi pedido?
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Al realitar tu compra se te proporciona un numero de guia el cual puedes consultar en la pagina de paqueteria</strong>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                >
                    ¿Cuentan con atencion al cliente?
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Claro que si, puedes comunicarte con nosotros mediante nuestro chat, o a traves de nuestro correo electronico</strong>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFour"
                    aria-expanded="false"
                    aria-controls="collapseFour"
                >
                    ¿Hay devoluciones?
                </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Si, cuentas con un periodo de 7 dias desde que se compro la prenda.</strong>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFive"
                    aria-expanded="false"
                    aria-controls="collapseFive"
                >
                    ¿Como puedo tener la certeza de que mi compra fue realizada correctamente?
                </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                <strong> La mayoría de las tiendas online siempre envían un correo electrónico al comprador para confirmar la compra de su pedido. 
                Pero, hay algunas que únicamente muestran un mensaje luego de finalizado el proceso de que el cliente ha efectuado la compra 
                correctamente. Por lo tanto, notifica si cuentas con este servicio o si debe si estar atento o de lo contrario no va a tener 
                manera de saber si ha culminado exitosamente. Otra manera, es invitarlo a verificar que ha hecho la compra al revisar si el 
                dinero fue debitado de su cuenta bancaria cómo una opción de verificación.</strong>
                </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-sm-6 p-3">
            <h2>Haz una pregunta!</h2>
            <form action="enviado.php" method="post">
            <!-- Name input -->
            <div class="mb-3 mt-3">
                <label label for="uname" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" />
            </div>

            <!-- Email input -->
            <div class="mb-3 mt-3">
                <label class="form-label" for="form4Example2">Correo Electronico</label>
                <input type="email" class="form-control" placeholder="ejemplo@example.com" name="email" />
            </div>

            <!-- Message input -->
            <div class="mb-3 mt-3">
                <label for="comment">Tu pregunta</label>
                <textarea class="form-control" name="opinon" rows="4"></textarea>
            </div>
            <!-- Submit button -->
            <button type="submit" name="enviar" class="btn btn-secondary">Enviar</button>
            </form>
        </div>
    </div>
</div>
<br><br><br>
</body>
</html>

<?php
    include "footer.php";
?>