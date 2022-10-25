<?php
    include("funcionesInvitado.php");

    $idComentario = $_REQUEST['idComentario'];
    $idLugar = $_GET['idLugar'];

    
    $c= conectarBD();
    $qry = "delete from comentarios where idComentario = '$idComentario'";
    $rs= mysqli_query($c,$qry);
    
    if($rs){
        //header("location:". $ruta . "plantillaLugar.php?idLugar=" . $_POST['idLugar'] );
        //header("Location:" . $ruta . "plantillaLugar.php?=idLugar" . $idLugar );
        //header("Location:" . $ruta . "plantillaLugar.php?idLugar=" . $idLugar );
        // header("location:". $ruta . "plantillaLugar.php?idLugar=" . $_GET["idLugar"]);
        header("Location:" . $ruta . "plantillaInf.php?idC= 1");
    }
    else{
        echo "no";
    }
