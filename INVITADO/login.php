<?php
session_start(); //nunca debe haber nada antes de session_start()
include("funcionesInvitado.php");
$msg = "";
    if(isset($_POST['txtUsuario']) && isset($_POST['txtPwd']))
    {
        if($_POST['txtUsuario']!="" && $_POST['txtPwd'])
        {
            //conectar a la BD para verificar que el usr y Pwd 
            $c = conectarBD();
            //generamos la consulta 
            $qry = "select * from usuarios where Usuario='". $_POST['txtUsuario'] ."' and Pwd='" . $_POST['txtPwd'] . "'";
            $rs = mysqli_query($c, $qry);
            if(mysqli_num_rows($rs)>0) //usuario si se autenticó
            {
                $datosUsuario = mysqli_fetch_array($rs);
                //hacer el redireccionamiento por GET
                //header("location:http://localhost/PHP/MODULO/portada.php?idU=" . $datosUsuario["idUsuario"]);
            
                //establecer el ssesion en el servidor
                //$_SESSION['']
                $_SESSION['idU'] = $datosUsuario["idUsuario"];
                $_SESSION['nombre'] = $datosUsuario["Usuario"];
                header("location:http://localhost/PHP/INVITADO/portada.php");
            }
            else
            {
                $msg = alertError();
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="estilosInvitado.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit&display=swap');
    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <?php
    if($msg != "") echo $msg;
    ?>
</body>
</html>