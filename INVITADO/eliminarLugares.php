<?php
    include("funcionesInvitado.php");

    $idLugar = $_REQUEST['idLugar'];
    
    $c= conectarBD();
    $qry = "delete from lugares where idLugar = '$idLugar'";
    $rs= mysqli_query($c,$qry);
    
    if($rs){
        //header("location: mostrartxtM.php");
        header("location:". $ruta . "plantillaInf.php?idC=1");
    }
    else{
        echo "no";
    }

?>