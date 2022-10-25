<?php
    include("funcionesInvitado.php");

    $idC = $_REQUEST['idC'];
    $nombre = $_POST['nombre'];
    
    $c= conectarBD();
    $qry = "update clasificacion set nombre='$nombre' where idC = '$idC'";
    $rs= mysqli_query($c,$qry);
    
    if($rs){
        header("location: addClasificacion.php");
    }
    else{
        echo "no";
    }

?>