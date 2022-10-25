<?php
session_start();
include("funcionesInvitado.php");


//Autenticacion
		if(!isset($_SESSION['idU']))
			{
				 header("location:" . $ruta . "verUsuarios.php");
			} 
		//Autorizacion
		$rolUsr= RolDeUsuario($_SESSION["idU"]);
		if($rolUsr!="Administrador")
		{
			header("location:" . $ruta . "verUsuarios.php");
		}
		
		if(!isset ($_GET['txtRol'])|| !isset ($_GET['txtUsuario']))
		{
			header("location:" . $ruta . "verUsuarios.php");

		}
		
		if($_GET['txtRol']=="" || $_GET['txtUsuario']=="")
		{
			header("location:" . $ruta . "verUsuarios.php");
		}
		
	    $qry = "Update Usuarios set Rol='".$_GET['txtRol']."' where idUsuario=" .$_GET['txtUsuario'];            
		$c=conectarBD();
		mysqli_query($c,$qry);
		mysqli_close($c);
		header("location:" . $ruta . "verUsuarios.php");
?>