<?php
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
    
    <center>
    <form action="guardarGaleria.php" method="POST" enctype="multipart/form-data">
        <h1>AGREGAR IMAGENES</h1>
        Lugares  <select name="idLugar" id="idLugar">
            <?php
            $c= conectarBD();
            $qry = "SELECT * from lugares";
	        $rs= mysqli_query($c,$qry);
            while($row = $rs->fetch_assoc()){
        ?>      
            <option value="<?php echo $row['idLugar'];?>"><?php echo $row['nombre'];?></option>
        <?php
            }
        ?>
        </select> 
        <br><br>
        <input type="text" name="nombre" id="nombre" REQUIRED placeholder="Nombre" value="">
        <input type="file" REQUIRED name="imagen" id="imagen">
        <input class="btn btn-success fuenteMenu" type="submit" value="Aceptar">
    </form>
    </center>
</body>
</html>