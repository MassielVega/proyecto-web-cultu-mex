<?php
    include("funcionesInvitado.php");

    $nombre = $_POST['nombre'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $idC = $_POST['idC'];

    $c= conectarBD();
    $qry = "insert into lugares (nombre, descripcion, titulo, idC) values ('$nombre', '$descripcion', '$titulo', '$idC')";
	$rs= mysqli_query($c,$qry);
    
    if($rs){
        header("location:" . $ruta .  "portada.php");
        //echo "se insertó";
    }
    else{
        echo "no";
    }

?>