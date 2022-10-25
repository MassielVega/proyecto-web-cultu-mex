<?php
	//los datos hayan sido pasados
	if(!isset($_GET['txtUsuario'])||
	!isset($_GET['txtPwd'])||
	!isset($_GET['txtRePwd'])||
	!isset($_GET['txtEmail']))
	{
		header("location:http://PHP/INVITADO/formsRegistro.php?err=1");
	}
	if($_GET['txtUsuario']=="" || $_GET['txtPwd']=="" || $_GET['txtRePwd']==""|| $_GET['txtEmail']=="")
	{
	 header("location:http://localhost/PHP/INVITADO/formsRegistro.php?err=2");
	}
	
	if($_GET['txtPwd']!=$_GET['txtRePwd'])
	{
	 header("location:http://localhost/PHP/INVITADO/formsRegistro.php?err=3");
	}
	
	//$usuario= $_GET['txtUsuario'];
	//$pwd= $_GET['txtPwd'];
	//$email= $_GET['txtEmail'];
	
	extract($_GET);
	
	//conexion a la BD
	$conn = mysqli_connect("localhost","root","","cultumex");
	
	//Crear la consulta SQL
	$consulta = "insert into usuarios (Usuario, Pwd, Rol, Email) value ('". $txtUsuario ."', '$txtPwd', 'General', '$txtEmail')";
	//ejecuta una consulta en la base de datos			
	$rs= mysqli_query($conn,$consulta);
	
	header("location:http://localhost/PHP/INVITADO/formsRegistro.php?err=4");

	
	
	
?>
