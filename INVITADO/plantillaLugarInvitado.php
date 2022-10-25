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

    encabezado();
    menuInvitado();
    imgLugares();
    contInfoLugarInvitado(); ?>
    <center>
    <h4>Ver comentarios actuales</h4>
    <?php

    $c = conectarBD();

    $qry = "Select * from comentarios where idLugar= " . $_GET['idLugar'];
    $rs = mysqli_query($c, $qry);

    if (mysqli_num_rows($rs) > 0) //si hay comentarios
    {
        while ($comentario = mysqli_fetch_object($rs)) {
            $n2 = $c->query("Select * from usuarios U inner join comentarios C on U.idUsuario= C.idUsuario");
                        $nU = $n2->fetch_assoc();
                        echo "<p> Nombre :" .  $nU['Usuario'] . "  </p>";
                        echo "<p> Comentrario: " . $comentario->comentario . "</p><br>";
                        echo "<a  class=\"\" href=\"eliminarComentario.php?idComentario=";?><?php echo $comentario-> idComentario?>";
                        <?php
                        echo "<hr>";
        }
    } else //no hay comentarios
    {
        echo "Por el momento no hay comentarios.";
    }
    ?>
    </center><?php
                piedepag();
                ?>
    ?>


</body>

</html>