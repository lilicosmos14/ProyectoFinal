<?php
//recibo los datos del formulario
include_once('con_bd.php');
        $name=$_POST['name'];
        $email=$_POST['email'];
        $telefono=$_POST['telefono'];

        $conectar=conn();
        $sql="INSERT INTO cobro(nombre,correo,telefono)
        VALUES('$name','$email','$telefono')";
        $resul = mysqli_query($conectar,$sql)or trigger_error("Query Failed! SQL-Error:".mysqli_error($conectar),E_USER_ERROR);
    echo "$sql";
?>