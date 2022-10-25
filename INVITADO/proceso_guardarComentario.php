<?php
    include("funcionesInvitado.php");

    $idUsuario = $_POST['idU'];
    $idLugar = $_GET['idLugar'];
    $comentario = $_POST['comentario'];


    $c= conectarBD();
    $qry = "insert into comentarios(idUsuario, idLugar,Fecha, comentario) values ( '1' ,'1','2010/09/98' ,'$comentario')";
	$rs= mysqli_query($c,$qry);
    
    if($rs){
        //header("location:" . $ruta .  "mostrar.php");
        echo "si se pudo";
    }
    else{
        echo "no";
    }

?>