<?php
    session_start();
    include("funcionesInvitado.php");


    $nombre = $_POST['nombre'];
    $idLugar = $_GET['idLugar'];
    $correo = $_POST['correo'];
    $apellido = $_POST['apellido'];
    $boletos = $_POST['boletos'];

    $c= conectarBD();
    $qry = "insert into reser(idUsuario, idLugar, nombre, apellido, boletos, correo) values (". $_SESSION["idU"] . " ,'1','$nombre','$apellido', '$boletos', '$correo')";
	$rs= mysqli_query($c,$qry);
    
    if($rs){
        header("location:" . $ruta .  "qr.php");
        echo "<div class=\"alert alert-success\" role=\"alert\">Reservación exitosa</div>";
    }
    else{
        echo "no";
    }

?>