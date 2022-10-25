<?php
    include("funcionesInvitado.php");

    
    $imgn = addslashes(file_get_contents($_FILES['imgn']['tmp_name']));

    $c= conectarBD();
    echo "$qry = \"insert into imagenes(imgn) value ('$imgn')\"";
	$rs= mysqli_query($c,$qry);
    
    if($rs){
        header("location:" . $ruta .  "portada.php");
    }
    else{
        echo "no";
    }

?>