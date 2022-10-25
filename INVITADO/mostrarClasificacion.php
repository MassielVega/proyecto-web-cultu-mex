<?php
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
<body style="padding: 0px;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
    <center>
        <?php
            $c= conectarBD();
            $qry = "select * from clasificacion";
	        $rs= mysqli_query($c,$qry);
            while($row = $rs->fetch_assoc()){
        ?>      
                <p><?php echo $row['nombre']?></p>
                <a class="btn btn-dark fuenteMenu" href="modificarClasificacion.php?idC=<?php echo $row['idC'];?>">Cambiar</a>
                <a class="btn btn-success fuenteMenu" href="eliminarClasificacion.php?idC=<?php echo $row['idC'];?>">Eliminar</a><br><br>
        <?php
            }
        ?>
        <a href="addClasificacion.php">Nueva clasificacion</a>
    </center>
</body>
</html>