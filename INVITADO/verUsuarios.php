<?php
session_start();
include("funcionesInvitado.php");

//Autenticacion
if (!isset($_SESSION['idU'])) {
	header("location:" . $ruta . "portada.php");
}
//Autorizacion
$rolUsr = RolDeUsuario($_SESSION["idU"]);
if ($rolUsr != "Administrador") {
	header("location:" . $ruta . "portada.php");
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<title>Sin título 1</title>
	<link rel="stylesheet" type="text/css" href="estilosInvitado.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Outfit&display=swap');
	</style>
</head>

<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<?php
	//declare el encabezado
	encabezado();
	if (isset($_SESSION['idU'])) // el usuario esta autenticado
	{
		//encabezado();
		menuAdmi();
		//sliderInicio();
		//bienvenide();
		//productInicio();
		echo "<center><h3>Listar los usuarios del sistema</h3>";
		$qry = "Select idUsuario, Usuario, Rol, Email from usuarios";


		$c = conectarBD();
		$rs = mysqli_query($c, $qry);

		//publicar el resultado de la consulta
		if (mysqli_num_rows($rs) > 0) // si hay usuarios
		{

			echo "<table>";
			echo "<tr>";
			echo "<td>Usuario</td>";
			echo "<td>Rol</td>";
			echo "<td>Correo Electronico</td>";
			echo "<td>Opciones</td>";
			echo "</tr>";

			while ($datos = mysqli_fetch_array($rs)) {
				echo "<tr>";
				echo "<td>" . $datos["Usuario"] . "</td>";
				echo "<td>";
	?>	
				<form method="get" action="actualizaRol.php">
					<select name="txtRol">
						<?php
						if ($datos["Rol"] == "Administrador") {
							echo "<option selected value=\"Administrador\">Administrador</option>";
							echo "<option value=\"General\">General</option>";
						} else if ($datos["Rol"] == "General") {
							echo "<option value=\"Administrador\">Administrador</option>";
							echo "<option selected value=\"General\">General</option>";
						}
						?>

					</select>
					<input type="hidden" value="<?php echo $datos["idUsuario"] ?>" name="txtUsuario">
					<input type="submit" value="Actualizar">
				</form>
		<?php
				echo "</td>";
				echo "<td>" . $datos["Email"] . "</td>";
				echo "<td><a href=\"eliminaUsuario.php?idU=" . $datos["idUsuario"] . "\"> Eliminar</a></td>";
				echo "<td><a href=\"portada.php\"> Regresar a portada</a></td>";
				echo "</tr>";
			}
			echo "</table></center>";
		} else //no hay documentos guardados
		{
			echo "Actualmente no hay documentos en la BD";
		}
		piedepag();
	} else {
		echo "<h3>Para hacer uso del sistema de control de archivos necesitas autenticarte</h3>";

		?>
		<form method="post" action="login.php" class="text-center btnInicioL">
			<?php
			encabezado();
			?>
			<div class="form-floating">
				<input type="text" id="txtUsuario" name="txtUsuario" class="form-control" placeholder="name@example.com">
				<h1 class="h3 mb-3 fw-normal">Iniciar sesión</h1>
				<label for="floatingInput">Usuario</label>
			</div>
			<div class="form-floating">
				<input type="password" id="txtPwd" name="txtPwd" class="form-control" placeholder="Password">
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