<?php
    include("funcionesInvitado.php");

    $nombre = $_POST['nombre'];

    $c= conectarBD();
    $qry = "insert into clasificacion(nombre) values ('$nombre')";
	$rs= mysqli_query($c,$qry);
    
    if($rs){
        header("location:" . $ruta .  "addClasificacion.php");
        //echo "se insertó";
    }
    else{
        echo "no";
    }

?>