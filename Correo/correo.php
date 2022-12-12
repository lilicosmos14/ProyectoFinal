<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'mooreeks@outlook.com';                     //SMTP username
    $mail->Password   = 'proyectofinal1234';                               //SMTP password
    $mail->SMTPSecure = ssl;            //Enable implicit TLS encryption
    $mail->Port       = 465;      
    
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $telefono=$_POST['telefono'];
    $total=$_POST['total'];

    //Recipients
    $mail->setFrom('mooreeks@outlook.com', 'Mooreeks');
    $mail->addAddress('$email', '$name');     //Add a recipient
    $mail->addAddress('ellen@example.com');               //Name is optional
   

   
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Compra en Mooreeks';
    $mail->Body    = 'Estimado(a): $name usted ha realizado una compra en nuestra pagina Mooreeks por $total , le agradecemos su preferencia;
    

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}