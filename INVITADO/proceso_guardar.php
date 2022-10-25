<?php
    include("funcionesInvitado.php");

    $nombre = $_POST['nombre'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $c= conectarBD();
    $qry = "insert into museos(nombre, imagen) values ('$nombre','$imagen')";
	$rs= mysqli_query($c,$qry);
    
    if($rs){
        header("location:" . $ruta .  "mostrar.php");
    }
    else{
        echo "no";
    }

?>