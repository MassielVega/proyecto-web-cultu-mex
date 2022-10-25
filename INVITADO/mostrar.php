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
            $qry = "select * from museos";
	        $rs= mysqli_query($c,$qry);
            while($row = $rs->fetch_assoc()){
        ?>      
                <img width="100%" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>">
                <a class="btn btn-dark fuenteMenu" href="modificar.php?idMuseo=<?php echo $row['idMuseo'];?>">Cambiar</a>
                <a class="btn btn-success fuenteMenu" href="eliminarImg.php?idMuseo=<?php echo $row['idMuseo'];?>">Eliminar</a><br><br>
        <?php
            }
        ?>
        <a class="btn btn-light fuenteMenu" href="museoArtCont.php">Regresar</a><br><br>
    </center>
</body>
</html>