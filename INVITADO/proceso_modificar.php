<?php
    include("funcionesInvitado.php");

    $idMuseo = $_REQUEST['idMuseo'];
    $nombre = $_POST['nombre'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $c= conectarBD();
    $qry = "update museos set nombre='$nombre', imagen='$imagen' where idMuseo = '$idMuseo'";
    $rs= mysqli_query($c,$qry);
    
    if($rs){
        header("location: mostrar.php");
    }
    else{
        echo "no";
    }

?>