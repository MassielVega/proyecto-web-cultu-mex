<?php
    include("funcionesInvitado.php");

    $nombre = $_POST['nombre'];
    
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $idLugar = $_POST['idLugar'];

    $c= conectarBD();
    $qry = "insert into galeria(nombre, imagen, idLugar) values ('$nombre','$imagen', $idLugar)";
	$rs= mysqli_query($c,$qry);
    
    if($rs){
        header("location:" . $ruta .  "portada.php");
    }
    else{
        echo "no";
    }

?>