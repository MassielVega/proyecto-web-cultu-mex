<?php
    include("funcionesInvitado.php");

    $idIglesia = $_REQUEST['idIglesia'];
    
    $c= conectarBD();
    $qry = "delete from iglesias where idIglesia = '$idIglesia'";
    $rs= mysqli_query($c,$qry);
    
    if($rs){
        header("location: mostrarIglesias.php");
    }
    else{
        echo "no";
    }

?>