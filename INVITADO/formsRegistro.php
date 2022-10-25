<?php
include("funcionesInvitado.php");
$msg= "";

    if(isset($_GET['err']) && $_GET['err']!= "")
	{
		if($_GET['err']=="1") $msg= "Se debe de utilizar el formulario de registro";
		if($_GET['err']=="2") $msg= "Todos los datos son requeridos";
		if($_GET['err']=="3") $msg= "Las contraseñas no coinciden";
		if($_GET['err']=="4") $msg= "El usuario se registro correctamente";
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Estado</title>
<link rel="stylesheet" type="text/css" href="estilosInvitado.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
@import url('https://fonts.googleapis.com/css2?family=Outfit&display=swap');
</style>
<script type="text/javascript">

function validaFRM()
{
	if(document.getElementById("txtUsuario").value == "" ||
	 document.getElementById("txtPwd").value=="" ||
	 document.getElementById("txtRePwd").value=="" ||
	 document.getElementById("txtEmail").value=="")
	{
	
		alert("Todos los datos del formulario son requeridos");
		return false;
	}
	
	else if(document.getElementById("txtPwd").value != document.getElementById("txtRePwd").value)
	{
		document.getElementById("txtMsg").innerHTML= "Las contraseñas deben ser iguales";
		document.getElementById("txtPwd").value="";
		document.getElementById("txtRePwd").value="";
		return false;
	}
	
	else{
	return true;
	}
}

</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="text-center btnInicioL">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <?php
        encabezado();
	?>
		   <main class="form-signin">
		   <form method="get" action="registraUsuario.php" onsubmit= "return validaFRM()">
				<?php
					if($msg!="")
					{
						echo "
						<div class=\"alert alert-success\" role=\"alert\">$msg</div>";
					}
					else
					{
						echo "<div id=\"txtMsg\"></div>";
					}
				?>
			 
			 <h1 class="h3 mb-3 fw-normal">Iniciar sesión</h1>      
          <div class="form-floating">
            <input type="text" id="txtUsuario" REQUIRED name="txtUsuario" class="form-control" placeholder="name@example.com">
            <label for="floatingInput">Usuario</label>
          </div>
          <div class="form-floating">
            <input type="email" id="txtEmail" REQUIRED name="txtEmail" class="form-control" placeholder="Password">
            <label for="floatingPassword">Correo electrónico</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="txtPwd" REQUIRED name="txtPwd" placeholder="Password">
            <label for="floatingPassword">Contraseña</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="txtRePwd" REQUIRED name="txtRePwd" placeholder="Password">
            <label for="floatingInput">Confirmación contraseña</label>
          </div>
           
          <button class="w-75 btn btn-lg btn-outline-dark btnRes" type="submit">Registrar</button></a> 
           </form>	 
           <a href="portada.php" class="regIS">Regresar a Iniciar sesión</a>
		 </main>
</body>
</html>