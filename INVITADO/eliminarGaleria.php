<?php
    include("funcionesInvitado.php");

    $idLugar = $_REQUEST['idLugar'];
    
    $c= conectarBD();
    $qry = "delete from galeria where idLugar = '$idLugar'";
    $rs= mysqli_query($c,$qry);
    
    if($rs){
        header("Location:" . $ruta . "plantillaInf.php?idC= 1");
    }
    else{
        echo "no";
    }

?>