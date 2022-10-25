<?php
session_start();
include("funcionesInvitado.php");
// recuperar la bandera de registraUsuario.php
$msg= "";
//validar si el usuario esta autenticado
	if(!isset($_SESSION["idU"]))
	{
		header("location:". $ruta . "portada.php");
        var_dump($_GET);
	}
    if(isset($_GET["idLugar"])&& $_GET["idLugar"]!="")
    {
        var_dump($_GET);
        //Insertar el comentario
        $c=conectarBD();
    $qry="insert into comentarios (idUsuario, idLugar, Fecha, comentario) value (". $_SESSION["idU"] . "," . $_GET["idLugar"] . ", '2021/11/29','" . $_GET["txtComentario"] . "')";
        $rs = mysqli_query($c,$qry);
        mysqli_close($c);
        header("location:". $ruta . "plantillaLugar.php?idLugar=" . $_GET["idLugar"]);
        if($rs){
            //header("location:" . $ruta .  "portada.php");
            echo "si morra";
        }
        else{
            echo "no";
        }
    }
?>
