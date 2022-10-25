<?php
session_start();
include("funcionesInvitado.php");
// recuperar la bandera de registraUsuario.php
$msg= "";
$comentario = $_GET['comentario'];
//validar si el usuario esta autenticado
	if(!isset($_SESSION["idU"]))
	{
		header("location:". $ruta . "portada.php");
	}
    if(!isset($_GET["comentario"]) || $_GET["comentario"]=="")
    {
        header("location:". $ruta . "plantillaLugar.php?idLugar=" . $_GET["idLugar"] );
    }
    if(isset($_GET["idLugar"])&& $_GET["idLugar"]!="")
    {
        //Insertar el comentario
        $c=conectarBD();
        $qry="insert into comentarios (idUsuario, idLugar, Fecha, comentario) values (". $_SESSION["idU"] . ", " . $_GET["idLugar"] . " , now() , '$comentario')";
        $rs = mysqli_query($c,$qry);
        header("location:". $ruta . "plantillaLugar.php?idLugar=" . $_GET["idLugar"]);
    }
   
?>
