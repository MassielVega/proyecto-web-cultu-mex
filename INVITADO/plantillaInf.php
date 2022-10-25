<?php
session_start();
include("funcionesInvitado.php");
?>
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

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
    <?php
	if(isset($_SESSION['idU']))// el usuario esta autenticado
	{ 
    $rolUsr= RolDeUsuario($_SESSION["idU"]);
	  if($rolUsr=="Administrador")
	  {
        encabezado();
        usuarioname();
        menuAdmi();
        contInfo();
        
        piedepag();
	  	//$qry= "Select d.*, u.Usuario from usuarios as u inner join documentos as d on u.idUsuario=d.idUsuario";
	  }
	  else
	  {
	  	//Colocar el menu del usuario general
      encabezado();
      usuarioname();
      menuGeneral();
	  	contInfoGeneral();
      piedepag();
	  	//$qry= "Select d.*, u.Usuario from usuarios as u inner join documentos as d on u.idUsuario=d.idUsuario where d.IdUsuario=" . $_SESSION["idU"]; 
	  }
    
  }
  else
  {
?>	
<form method="post" action="login.php" class="text-center btnInicioL">
      <?php
      encabezado();
      ?>
      <h1 class="h3 mb-3 fw-normal">Iniciar sesión</h1>
      <div class="form-floating">
        <input type="text" id="txtUsuario" REQUIRED name="txtUsuario" class="form-control" placeholder="name@example.com">
        <label for="floatingInput">Usuario</label>
      </div>
      <div class="form-floating">
        <input type="password" id="txtPwd" REQUIRED name="txtPwd" class="form-control" placeholder="Password">
        <label for="floatingPassword">Contraseña</label>
      </div>
			<button class="w-75 btn btn-lg btn-dark btnRe" type="submit">Iniciar Sesión</button>
      <a href="formsRegistro.php" class="w-75 btn btn-lg btn-outline-dark btnRes" type="submit">Registrar</button></a>
</form>
    <div class="btnInicioL text-center">
      <a href="inicioInvitado.php" class="regIS">Iniciar como Invitado</a>
    </div>
<?php
  }
?>
</body>
</html>