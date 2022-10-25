<?php
    include("funcionesInvitado.php");

    $idLugar = $_REQUEST['idLugar'];
    $idC = $_POST['idC'];
    $nombre = $_POST['nombre'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    
    $c= conectarBD();
    $qry = "update lugares set idC='$idC', nombre='$nombre', titulo='$titulo', descripcion='$descripcion' where idLugar = '$idLugar'";
    $rs= mysqli_query($c,$qry);
    
    if($rs){
        header("location: portada.php");
        //echo "se modifico";
    }
    else{
        echo "no";
    }

?>