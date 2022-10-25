<?php
session_start();
include("funcionesInvitado.php")
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
    if (isset($_SESSION['idU'])) // el usuario esta autenticado
    {
        $rolUsr = RolDeUsuario($_SESSION["idU"]);
        if ($rolUsr == "Administrador") {
            encabezado();
            usuarioname();
            menuAdmi();
            $idLugar = $_REQUEST['idLugar'];

            $c = conectarBD();
            $qry = "select * from lugares where idLugar='$idLugar'";
            $rs = mysqli_query($c, $qry);
            $row = $rs->fetch_assoc();
    ?>
            <center>
                <form action="proceso_modificarLugares.php?idLugar=<?php echo $row['idLugar']; ?>" method="POST">
                    <br><br>
                    <h3>MODIFICAR LUGAR</h3>
                    
                    <select name="idC" id="idC">
                        Clasificaciones:
                        <?php
                        $idLugar = $_REQUEST['idLugar'];
                        $c = conectarBD();
                        $qry = "SELECT * from clasificacion";
                        $rs = mysqli_query($c, $qry);
                        while ($row = $rs->fetch_assoc()) {
                        ?>
                            <option value="<?php echo $row['idC']; ?>"><?php echo $row['nombre']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <br><br>
                    NOMBRE:<input id="nombre" name="nombre" type="text" value=""><br><br>
                    TITULO: <textarea id="titulo" name="titulo" rows="1" cols="50" value=""></textarea><br>
                    DESCRIPCIÓN: <textarea id="descripcion" name="descripcion" rows="7" cols="50" value=""></textarea><br><br>
                    <input class="btn btn-dark fuenteMenu" type="submit" value="Aceptar"><br><br>
                    <a href="portada.php" class="btn btn-light fuenteMenu">Cancelar</a>

                </form>
            </center>
        <?php
        } else {
            //Colocar el menu del usuario general
            encabezado();
            usuarioname();
            menuGeneral();
            sliderInicio();
            piedepag();
            //$qry= "Select d.*, u.Usuario from usuarios as u inner join documentos as d on u.idUsuario=d.idUsuario where d.IdUsuario=" . $_SESSION["idU"]; 
        }
    } else {
        ?>
    <?php
    }
    ?>
</body>

</html>