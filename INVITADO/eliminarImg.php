<?php
    include("funcionesInvitado.php");

    $idMuseo = $_REQUEST['idMuseo'];
    
    $c= conectarBD();
    $qry = "delete from museos where idMuseo = '$idMuseo'";
    $rs= mysqli_query($c,$qry);
    
    if($rs){
        header("location: mostrar.php");
    }
    else{
        echo "no";
    }

?>