<?php
    include("funcionesInvitado.php");

    $idArchivo = $_REQUEST['idArchivo'];
    $nombre = $_POST['nombre'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $idLugar = $_POST['idLugar'];

    $c= conectarBD();
    $qry = "update galeria set nombre='$nombre', imagen='$imagen', idLugar='$idLugar' where idArchivo = '$idArchivo'";
    $rs= mysqli_query($c,$qry);
    
    if($rs){
        header("location: portada.php");
    }
    else{
        echo "no";
    }

?>