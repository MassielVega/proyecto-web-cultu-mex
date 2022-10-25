<?php
$ruta = "http://localhost/PHP/INVITADO/";

function encabezado()
{
  echo "<header class=\"encabezadoInvitado\"><img src=\"logoCM2.png\"></header>";
}
function menuAdmi()
{
  echo "<nav class=\"navbar navbar-expand-lg navbar-light contenedorMenu\">
        <div class=\"container-fluid\">
          <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
          <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
              <li class=\"nav-item\">
                <a class=\"nav-link active fuenteMenuInicio\" aria-current=\"page\" href=\"portada.php\">Home</a>
              </li></ul>";
?>
  <?php
  $c = conectarBD();
  $qry = "select * from clasificacion";
  $rs = mysqli_query($c, $qry);
  while ($row = $rs->fetch_assoc()) {
  ?>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active fuenteMenu" aria-current="page" href="plantillaInf.php?idC=<?php echo $row['idC']; ?>"><?php echo $row["nombre"]; ?></a>
      </li>
    </ul>
  <?php
  }
  ?>

<?php
  echo "  <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                <li class=\"nav-item dropdown\">
                    <a class=\"fuenteMenu nav-item dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    Mi perfil
                    </a>
                      <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <li><a class=\"dropdown-item fuenteSubMenu\" href=\"verUsuarios.php\">Ver Usuarios</a><li>
                        <li><a class=\"dropdown-item fuenteSubMenu\" href=\"cambiaPwd.php\">Cambiar contraseña</a><li>
                        <li><a class=\"dropdown-item fuenteSubMenu\" href=\"logout.php\">Cerrar sesión</a><li>
                      </ul>
                </li>
                 
                </ul>
                <a class=\"nav-link active\" aria-current=\"page\" href=\"addClasificacion.php\">Editar</a>
          </div>
        </div>
      </nav>";
}
function menuGeneral()
{
  echo "<nav class=\"navbar navbar-expand-lg navbar-light contenedorMenu\">
        <div class=\"container-fluid\">
          <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
          <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
              <li class=\"nav-item\">
                <a class=\"nav-link active fuenteMenuInicio\" aria-current=\"page\" href=\"portada.php\">Home</a>
              </li></ul>";
?>
  <?php
  $c = conectarBD();
  $qry = "select * from clasificacion";
  $rs = mysqli_query($c, $qry);
  while ($row = $rs->fetch_assoc()) {
  ?>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active fuenteMenu" aria-current="page" href="plantillaInf.php?idC=<?php echo $row['idC']; ?>"><?php echo $row["nombre"]; ?></a>
      </li>
    </ul>
  <?php
  }
  ?>

<?php
  echo "  <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                <li class=\"nav-item dropdown\">
                    <a class=\"fuenteMenu nav-item dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    Mi perfil
                    </a>
                      <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <li><a class=\"dropdown-item fuenteSubMenu\" href=\"cambiaPwd.php\">Cambiar contraseña</a><li>
                        <li><a class=\"dropdown-item fuenteSubMenu\" href=\"logout.php\">Cerrar sesión</a><li>
                      </ul>
                </li>
                 
                </ul>
          </div>
        </div>
      </nav>";
}
function menuInvitado()
{
  echo "<nav class=\"navbar navbar-expand-lg navbar-light contenedorMenu\">
        <div class=\"container-fluid\">
          <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
          <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
              <li class=\"nav-item\">
                <a class=\"nav-link active fuenteMenuInicio\" aria-current=\"page\" href=\"portada.php\">Home</a>
              </li></ul>";
?>
  <?php
  $c = conectarBD();
  $qry = "select * from clasificacion";
  $rs = mysqli_query($c, $qry);
  while ($row = $rs->fetch_assoc()) {
  ?>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active fuenteMenu" aria-current="page" href="plantillaInfInvitado.php?idC=<?php echo $row['idC']; ?>"><?php echo $row["nombre"]; ?></a>
      </li>
    </ul>
  <?php
  }
  ?>

<?php
  echo "  <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                <li class=\"nav-item dropdown\">
                    <a class=\"fuenteMenu nav-item dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    Mi perfil
                    </a>
                      <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        
                        <li><a class=\"dropdown-item fuenteSubMenu\" href=\"portada.php\">Iniciar sesión</a><li>
                      </ul>
                </li>
                 
                </ul>
          </div>
        </div>
      </nav>";
}
function listadoSubclass()
{

  $c = conectarBD();
  $idC = $_GET["idC"];
  $sql = mysqli_query($c, "SELECT * FROM clasificacion where idC= $idC");
  $rr = mysqli_fetch_array($sql) ?><center>
    <h3 class="mb-0 font"><?php echo $rr['nombre']; ?></h3>

    <?php
    $c = conectarBD();
    $id = $_GET["idC"];

    $sql = mysqli_query($c, "SELECT * FROM lugares WHERE idC=$id");
    while ($rr = mysqli_fetch_array($sql)) { ?>

      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <center>
            <h3 class="mb-0 font card-text mb-auto"><?php echo $rr["titulo"]; ?></h3>
            <?php imgLugares(); ?>
            <a class="nav-link img-fluid" href="plantillaLugar.php?idLugar=<?php echo $rr["idLugar"]; ?>"> Ver más</a>
          </center>
        </div>
        <div class="col-auto d-none d-lg-block">
        </div>

      </div><?php } ?>
    <?php
  }
  function imgLugares()
  {
    $c = conectarBD();
    $idLugar = $_GET["idLugar"];

    $sql = mysqli_query($c, "SELECT * FROM galeria WHERE idLugar='$idLugar'");
    while ($rr = mysqli_fetch_array($sql)) { ?>
      <center>
        <img width="100%" src="data:image/jpg;base64, <?php echo base64_encode($rr['imagen']); ?>">
      </center>
      </div>
      </div><?php } ?>
    <?php
  }

  function usuarioname()
  {
    echo "
      <p class=\"usuarioname\"> Bienvenide " . $_SESSION['nombre'] . " </p>";
  }
  function sliderInicio()
  {
    echo "<div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-bs-ride=\"carousel\">
      <div class=\"carousel-inner\">
        <div class=\"carousel-item active\">
          <img src=\"ARTE..png\" class=\"d-block w-100 slider\" alt=\"...\">
        </div>
        <div class=\"carousel-item\">
          <img src=\"o.png\" class=\"d-block w-100 slider\" alt=\"...\">
        </div>
        <div class=\"carousel-item\">
          <img src=\"k.png\" class=\"d-block w-100 slider\" alt=\"...\">
        </div>
      </div>
      </div>";
  }
  function piedepag()
  {
    echo "<footer class=\"piedepagInvitado\">
                <div class=\"container\">
                    <footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\">
                        <div class=\"col-md-4 d-flex align-items-center\">
                            <a href=\"/\" class=\"mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1\">
                              <svg class=\"bi\" width=\"30\" height=\"24\"><use xlink:href=\"#bootstrap\"/></svg>
                            </a>
                          <span class=\"text-muted\">&copy; 2021 Company, Inc</span>
                        </div>
                    </footer>
                </div>
              </footer>";
  }
  function conectarBD()
  {
    //conexión a la BD
    $conn = mysqli_connect("localhost", "root", "", "cultumex");
    return $conn;
  }
  function RolDeUsuario($idUsuario)
  {
    $con = conectarBD();
    $rs = mysqli_query($con, "select Rol from usuarios where idUsuario=" . $idUsuario);
    $datoUrs = mysqli_fetch_object($rs);
    mysqli_close($con);
    return $datoUrs->Rol;
  }
  function video()
  {
    echo "<div>
                <video width=\"100%\" autoplay muted loop>
                <source src=\"videof.mp4\" type=\"video/mp4\">
                </video>
              </div>";
  }
  function productInicio()
  {
    echo "<div class=\"position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light\">
            <div class=\"col-md-5 p-lg-5 mx-auto my-5\">
              <h1 class=\"display-4 fw-normal font\">¿QUIENES SOMOS?</h1>
              <p class=\"lead fw-normal font\">Somos una empresa dedicada a la difusión cultural del estado de San Luis Potosí.</p>
            </div>
            <div class=\"product-device shadow-sm d-none d-md-block\"></div>
            <div class=\"product-device product-device-2 shadow-sm d-none d-md-block contCajas\"></div>
            </div>

              

              <div class=\"d-md-flex flex-md-equal w-100 my-md-3 ps-md-3 \">
              <div class=\"bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden\">
              <div class=\"my-3 py-3\">
                <h2 class=\"display-5 font\">¿Qué es Cultura?</h2>
                <p class=\"font\">La cultura es el conjunto de conocimientos y rasgos característicos que distinguen a una sociedad, una determinada época o un grupo social. El término cultura conforme ha ido evolucionando en la sociedad, está asociado a progreso y a valores.</p>
              </div>
              </div>

              <div class=\"bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden\">
                <div class=\"my-3 p-3\">
                  <h2 class=\"display-5\">Misión y Visión</h2>
                  <p class=\"lead\">Informar, educar y facilitar un mayor acceso a la población a los productos culturales y artísticos que alberga a través de exposiciones museográficas permanentes, temporales e itinerantes, y de material educativo.</p>
                </div>
                <div class=\"bg-light shadow-sm mx-auto\" style=\"width: 100%; height: 300px; border-radius: 21px 21px 0 0;\"></div>
            </div>

            
            </div>";
  }
  function inform1()
  {
    echo " <div class=\"position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light\">
              <div class=\"col-md-5 p-lg-5 mx-auto my-5\">
                <h1 class=\"display-4 fw-normal\">Punny headline</h1>
                <p class=\"lead fw-normal\">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
                <a class=\"btn btn-outline-secondary\" href=\"#\">Coming soon</a>
              </div>
              <div class=\"product-device shadow-sm d-none d-md-block\"></div>
              <div class=\"product-device product-device-2 shadow-sm d-none d-md-block contCajas\"></div>
            </div>
            
            <div class=\"infMu\">
            Cuenta con dos amplias terrazas para la realización de actividades culturales. Se ubica en la antigua Casa de Correos, en un edificio de estilo neoclásico obra de Ignacio Escalante. El inmueble data de los años 1865 a 1866. En 1903 fue adquirido por el gobierno federal para instalar ahí la Casa de Correos. Posteriormente, en 2006, el gobierno del estado recuperó el edificio para efectuar su restauración con el objetivo de convertirlo en museo. El MAC tiene cinco amplias salas para exposición de obras de arte, tres de ellas en la planta baja, con un total de 557 metros cuadrados, y dos en la planta alta, las que suman 110 metros cuadrados. La misión de este espacio dedicado a la plástica es exponer, conservar, difundir, debatir y promover el arte contemporáneo en todas sus manifestaciones, así como convertirse en un enlace entre San Luis Potosí y las expresiones visuales de la región y del mundo.
            </div>
            <center><br><br>
            <input class=\"btn btn-success fuenteMenu\" type=\"submit\" value=\"Reservar entrada\">
            </center> <br><br>";
  }
  function comments()
  {
    echo "<div class=\"container justify-content-center mt-5 border-left border-right\">
            <div class=\"d-flex justify-content-center pt-3 pb-2\"> <input type=\"text\" name=\"text\" placeholder=\"+ Add a note\" class=\"form-control addtxt\"> </div>
            <div class=\"d-flex justify-content-center py-2\">
                <div class=\"second py-2 px-2\"> <span class=\"text1\">Type your note, and hit enter to add it</span>
                    <div class=\"d-flex justify-content-between py-1 pt-2\">
                        <div><img src=\"https://i.imgur.com/AgAC1Is.jpg\" width=\"18\"><span class=\"text2\">Martha</span></div>
                        <div><span class=\"text3\">Upvote?</span><span class=\"thumbup\"><i class=\"fa fa-thumbs-o-up\"></i></span><span class=\"text4\">3</span></div>
                    </div>
                </div>
            </div>
            <div class=\"d-flex justify-content-center py-2\">
                <div class=\"second py-2 px-2\"> <span class=\"text1\">Type your note, and hit enter to add it</span>
                    <div class=\"d-flex justify-content-between py-1 pt-2\">
                        <div><img src=\"https://i.imgur.com/tPvlEdq.jpg\" width=\"18\"><span class=\"text2\">Curtis</span></div>
                        <div><span class=\"text3\">Upvote?</span><span class=\"thumbup\"><i class=\"fa fa-thumbs-o-up\"></i></span><span class=\"text4\">3</span></div>
                    </div>
                </div>
            </div>";
  }
  function galleryM()
  {
    echo "
            <img
                src=\"proyectocultumex/MAC.jpg\"
                class=\"w-100 shadow-1-strong rounded mb-4\"
                alt=\"\">";
  }
  function buscador()
  {
    echo "<form class=\"d-flex\">
      <input class=\"form-control me-2 fuenteMenu conB\" type=\"search\" placeholder=\"Buscar\" aria-label=\"Search\">
      <button class=\"btn btn-dark fuenteMenu\" type=\"submit\">Buscar</button> 
      </form>";
  }
  function alertError()
  {
    echo "<div class=\"alert alert-danger\" role=\"alert\"> Contraseña / Usuario , incorrecto. </div>";
  }
  function addClasificacion()
  {
    echo "<center>
        <form action=\"guardarClasificacion.php\" method=\"POST\"><br><br>
        <h3>AGREGAR CLASIFICACIÓN</h3>
        Nombre:<input id=\"nombre\" type=\"text\" REQUIRED name=\"nombre\"><br><br>
        <input class=\"btn btn-success fuenteMenu\" type=\"submit\" value=\"Aceptar\">
        <input class=\"btn btn-light fuenteMenu\" type=\"reset\" value=\"Cancelar\"><br>
        </form>
        </center>";
  }
  function addReservacion()
  {
    echo "<center>
        <form action=\"guardarReservacion.php\" method=\"POST\"><br><br>
        <h3 class=\"font\"> Reservación </h3><br><br>
        Nombre:<input class=\"font\" id=\"nombre\" type=\"text\" REQUIRED name=\"nombre\"><br><br>
        Apellido:<input class=\"font\" id=\"apellido\" type=\"text\" REQUIRED name=\"apellido\"><br><br>
        Boletos: <select name=\"boletos\">
        <option value=\"1\" selected>1</option>
        <option value=\"2\">2</option>
        <option value=\"3\">3</option>
        <option value=\"4\">4</option>
        <option value=\"5\">5</option>
        </select><br><br>
        Correo:<input class=\"font\" id=\"correo\" type=\"text\" REQUIRED name=\"correo\"><br><br>

        <input class=\"btn btn-success fuenteMenu\" type=\"submit\" value=\"Aceptar\"><br><br>
        <input class=\"btn btn-light fuenteMenu\" type=\"reset\" value=\"Cancelar\"><br>
        </form>
        </center>";
  }
  function modificarClasificacion()
  {
    echo "<center>";
    $c = conectarBD();
    $qry = "select * from clasificacion";
    $rs = mysqli_query($c, $qry);
    while ($row = $rs->fetch_assoc()) {
    ?>
      <p>---------------------------------------------------------</p><br>
      <p><?php echo $row['nombre'] ?></p>
      <a class="btn btn-dark fuenteMenu" href="modificarClasificacion.php?idC=<?php echo $row['idC']; ?>">Cambiar</a>
      <a class="btn btn-success fuenteMenu" href="eliminarClasificacion.php?idC=<?php echo $row['idC']; ?>">Eliminar</a><br><br>
    <?php
    }
    ?>
    <?php echo "<center>"; ?>
  <?php
  }
  function contInfo()
  {
  ?>
    <?php
    $c = conectarBD();
    $id = $_GET["idC"];

    $sql = mysqli_query($c, "SELECT * FROM lugares WHERE idC=$id");
    while ($rr = mysqli_fetch_array($sql)) {
    ?>
      <center>
        <div class="row ">
          <div class="col-lg-4 contInfo">
            <center>

              <h2><?php echo $rr["titulo"]; ?></h2>
              <p><a class="btn btn-success fuenteMenu" href="plantillaLugar.php?idLugar=<?php echo $rr["idLugar"]; ?>">Ver más &raquo;</a></p>
            </center>
            <a href="modificarLugar.php?idLugar=<?php echo $rr["idLugar"]; ?>">Editar</a>
            <a href="eliminarLugares.php?idLugar=<?php echo $rr["idLugar"]; ?>">Eliminar</a>
          </div>
        </div>
      </center>

    <?php } ?> <center><a href="addLugar.php" class="font">Nuevo</a></center>
  <?php
  }
  function contInfoLugar()
  {
  ?>
    <?php
    $c = conectarBD();
    $idLugar = $_GET['idLugar'];

    $sql = mysqli_query($c, "SELECT * FROM lugares WHERE idLugar=$idLugar");
    while ($rr = mysqli_fetch_array($sql)) {
    ?>
      <center><br><br>
        <p><a href="modificarGaleria.php?idLugar=<?php echo $rr["idLugar"]; ?>">Editar img</a></p>
        <p><a href="addGaleria.php">Añadir img</a></p>
        <p><a href="eliminarGaleria.php?idLugar=<?php echo $rr["idLugar"]; ?>">Eliminar img</a></p>
        <h2 class="font"><?php echo $rr["titulo"]; ?></h2><br><br>
        <p class="font" style="width: 80%;"><?php echo $rr["descripcion"]; ?></p><br><br>
        <p><a class="btn btn-success fuenteMenu" href="reservar.php?idLugar=<?php echo $rr["idLugar"]; ?>">Reservar &raquo;</a></p>
      
      </center>
    </center>

  </center>
<?php }
  }
  function contInfoGeneral()
  {
?>
<?php
    $c = conectarBD();
    $id = $_GET["idC"];

    $sql = mysqli_query($c, "SELECT * FROM lugares WHERE idC=$id");
    while ($rr = mysqli_fetch_array($sql)) {
?>
  <center>
    <div class="row ">
      <div class="col-lg-4 contInfo">
        <center>

          <h2><?php echo $rr["titulo"]; ?></h2>
          <p><a class="btn btn-success fuenteMenu" href="plantillaLugar.php?idLugar=<?php echo $rr["idLugar"]; ?>">Ver más &raquo;</a></p>
        </center>
      </div>
    </div>
  </center>

<?php } ?>
<?php
  }
  function contInfoLugarGeneral()
  {
?>
  <?php
    $c = conectarBD();
    $idLugar = $_GET["idLugar"];

    $sql = mysqli_query($c, "SELECT * FROM lugares WHERE idLugar=$idLugar");
    while ($rr = mysqli_fetch_array($sql)) {
  ?>
    <center><br><br>
      <h2 class="font"><?php echo $rr["titulo"]; ?></h2><br><br>
      <p class="font" style="width: 80%;"><?php echo $rr["descripcion"]; ?></p><br><br>
      <p><a class="btn btn-success fuenteMenu" href="reservar.php?idLugar=<?php echo $rr["idLugar"]; ?>">Reservar &raquo;</a></p>
    </center>
    </center>

    </center>
  <?php
    }
  }
  function contInfoInvitado()
  {
  ?>
  <?php
    $c = conectarBD();
    $id = $_GET["idC"];

    $sql = mysqli_query($c, "SELECT * FROM lugares WHERE idC=$id");
    while ($rr = mysqli_fetch_array($sql)) {
  ?>
    <center>
      <div class="row ">
        <div class="col-lg-4 contInfo">
          <center>

            <h2><?php echo $rr["titulo"]; ?></h2>
            <p><a class="btn btn-success fuenteMenu" href="plantillaLugarInvitado.php?idLugar=<?php echo $rr["idLugar"]; ?>">Ver más &raquo;</a></p>
          </center>
        </div>
      </div>
    </center>

  <?php } ?>
<?php
  }
  function contInfoLugarInvitado()
  {
?>
  <?php
    $c = conectarBD();
    $idLugar = $_GET["idLugar"];

    $sql = mysqli_query($c, "SELECT * FROM lugares WHERE idLugar=$idLugar");
    while ($rr = mysqli_fetch_array($sql)) {
  ?>
    <center><br><br>
      <h2 class="font"><?php echo $rr["titulo"]; ?></h2><br><br>
      <p class="font" style="width: 80%;"><?php echo $rr["descripcion"]; ?></p><br><br>
      <p><a class="btn btn-success fuenteMenu" href="portada.php">Reservar &raquo;</a></p>
    </center>
    </center>

    </center>
<?php
    }
  }
