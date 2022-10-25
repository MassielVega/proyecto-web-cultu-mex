<?php
session_start();
include("funcionesInvitado.php");

//verificar que el usuario este autenticado
	if(!isset($_SESSION['idU']))
	{
		 header("location:" . $ruta . "verUsuarios.php");
	} 
	//recuperar el rol del usuario
	
	//verificar que se haya enviado el id del documento que requiero eliminar
	if(isset($_GET["idU"])&& $_GET["idU"]!="")
	{

		if($_SESSION['idU']!= $GET['idU'])
		{
			if(RolDeUsuario($_SESSION["idU"])=="Administrador")
			{
				$qry = "delete from usuarios where idUsuario=" . $_GET["idU"];
				$c=conectarBD();
				mysqli_query($c,$qry);
				mysqli_close($c);
				header("location:" . $ruta . "verUsuarios.php");
			}
		} 
		
	} 


?>