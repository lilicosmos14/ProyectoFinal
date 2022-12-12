<?php

if (session_status() == PHP_SESSION_NONE) {
    echo '<script>alert("INICIE SESION PARA CONTINUAR")</script>';
}

?>
