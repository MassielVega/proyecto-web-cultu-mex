<?php
session_start();
include("funcionesInvitado.php");
// recuperar la bandera de registraUsuario.php
$msg= "";
//validar si el usuario esta autenticado
	if(!isset($_SESSION["idU"]))
		{
			header("location:". $ruta . "login.php");
		}


// identificar si se pasaron los datos por formulario
	if(isset($_POST["txtPwdActual"])&& isset($_POST["txtNewPwd"]) && isset($_POST["txtReNewPwd"]))
	{
		if($_POST["txtPwdActual"]!="" && $_POST["txtNewPwd"]!="" && $_POST["txtReNewPwd"]!="")
		{
			//podemos proceder a la actualizacion de la informacion
			//abrimos la conexion a base de datos
			
			$c = conectarBD();
			$qry = "update usuarios set Pwd= '" . $_POST["txtNewPwd"]. "' where idUsuario=" . $_SESSION ["idU"] .  " and Pwd='".$_POST["txtPwdActual"]."'";
			mysqli_query($c,$qry);
			
			$msg= "La contraseña se actualizo correctamente";
			mysqli_close($c);
		}
	}
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estilosInvitado.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Outfit&display=swap');
        </style>
</head>
<script type="text/javascript">

function validaFRM()
{
	if(document.getElementById("txtPwdActual").value == "" ||
	 document.getElementById("txtNewPwd").value=="" ||
	document.getElementById("txtReNewPwd").value=="")
	 
	{
	
		alert("Todos los datos del formulario son requeridos");
		return false;
	}
	
	else if(document.getElementById("txtNewPwd").value!= document.getElementById("txtReNewPwd").value)
	{
		document.getElementById("txtMsg").innerHTML= "Las nuevas contraseñas deben ser iguales";
		document.getElementById("txtPwd").value="";
		document.getElementById("txtRePwd").value="";
		return false;
	}
	
	else{
	return true;
	}
}

</script>
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
<?php
	encabezado();
?>
<center class= "font">
<h1 class="font">Sistema de control de archivos</h1>

<form method="post" action="cambiaPwd.php" onsubmit=" return validaFRM()">
<h3>Formulario de actualizacion de la constraseña</h3>
<?php
	if($msg!="")
	{
		echo "<div id=\"txtMsg\" class=\"err\">$msg</div>";
	}
	else
	{
		echo "<div id=\"txtMsg\"></div>";
	}
?>

Ingresa la contraseña actual: <input type="password" id="txtPwdActual" name="txtPwdActual"><br>
Escribe tu nueva contraseña: <input type="password" id="txtNewPwd" name="txtNewPwd"><br>
Re escribe tu nueva contraseña: <input type="password" id="txtReNewPwd" name="txtReNewPwd"><br><br>
<input type="submit" class="btn btn-success fuenteMenu" value="Actualizar contraseña">
<input type="reset" class="btn btn-light fuenteMenu" value="Cancelar"><br><br><br>
 <a href="portada.php"> Regresar</a>  
</form></center>
</body>

</html>
