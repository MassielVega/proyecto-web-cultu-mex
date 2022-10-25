<?php
    include("funcionesInvitado.php");

    $idC = $_REQUEST['idC'];
    
    $c= conectarBD();
    $qry = "delete from clasificacion where idC = '$idC'";
    $rs= mysqli_query($c,$qry);
    
    if($rs){
        header("location: addClasificacion.php");
    }
    else{
        echo "no";
    }

?>