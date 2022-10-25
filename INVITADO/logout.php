<?php
    session_start();
    session_destroy();
    include("funcionesInvitado.php");
    header("location:" . $ruta . "portada.php");
?>