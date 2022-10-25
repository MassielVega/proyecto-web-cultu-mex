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
        include("funcionesInvitado.php");
        
    $idMuseo = $_REQUEST['idMuseo'];
    
    $c= conectarBD();
        $qry = "select * from museos where idMuseo='$idMuseo'";
	    $rs= mysqli_query($c,$qry);
        $row = $rs->fetch_assoc();
    ?>
    <center>
        <form action="proceso_modificar.php?idMuseo=<?php echo $row['idMuseo']; ?> " method="POST" enctype="multipart/form-data">
            <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre'];?>"><br><br>
            <img height="150px" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>"><br><br>
            <input type="file" name="imagen"><br><br>
            <input class="btn btn-dark fuenteMenu" type="submit" value="Aceptar"><br><br>
            <a class="btn btn-light fuenteMenu" href="mostrar.php">Cancelar</a>
        </form>
    </center>
</body>
</html>