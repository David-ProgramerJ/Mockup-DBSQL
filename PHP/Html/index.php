<?php
$host = "localhost";
$usuario = "root";
$password = "";
$base_de_datos = "version_1";
$puerto = 3309;

// Conexión a MySQL con puerto
$conexion = new mysqli($host, $usuario, $password, $base_de_datos, $puerto);

if ($conexion->connect_error) {
    error_log("Error de conexión: " . $conexion->connect_error);  
    die("Error de conexión. Intente más tarde.");
}

$conexion->set_charset("utf8");

$conexion->close();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: rgb(255, 255, 255);
        }
        /* Clases generales */
        .div3-color {
            background-color: white;
        }
        .h2 {
            font-family: sans-serif;
            font-weight: bold;
        }
        .span {
            color: rgba(0, 80, 234, 255);
        }
        .img {
            max-width: 120px;
            height: 80px;
            object-fit: cover;
        }
        .boton-personalizado {
            background-color: rgba(0, 80, 234, 255);
            cursor: pointer;
        }
        .gris {
            background-color: rgba(128, 128, 128, 0.562);
            padding: 100px; 
            border-radius: 5px; 
        }
        /* Parte proyecto 3 */
        .fondo-azul{
            background-color: rgba(0, 89, 255, 0.8);
        }
        .title-desktop{
            margin-top: 50px;
            color: white;
            font-size: 40px;
            font-weight: bold;
        }
        .imagen-desktop {
            margin-top: 120px;
            text-align: end;
        }
        .texto{
            color: white;
            margin-top: 50px;
        }
        /* Información de contacto */
        .text{
            font-size: 22px;
            font-weight: 500;
        }
        .ct-asesorias .boton{
            color: white;
            border-radius: 5px;
            height: 40px;
            font-size: 15px;
            width: 250px;
        }
        /* Footer e inframe */
        .formulario {
            width:100%;
        }
        .contact-container {
            max-height: 100%;
            width:100%;
        }
        .contact-info {
            background-color: #fff;
            padding: 40px;
        }
        .contact-item i {
            font-size: 1.5rem;
        }
        .form-container {
            background-color: #f1f3f6;
            padding: 40px;
            display: flex;
            justify-content: center;
        }
        .form-container div {
            max-width: 600px;
            width: 100%;
        }
        .container-mapa {
            width: 100%;
            height: 400px;
            position: relative;
            overflow: hidden;
        }
        .container-mapa iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
        @media (min-width: 769px) {
            .contenedor {
                margin-bottom:119px;
            }
        }
        /* Estilos para la primera parte */
        .col-8 img,
        .responsive1 img {
            width: 100%;
            height: auto;
        }
        .myborder {
            border: 3px solid rgb(139, 139, 194);
            border-radius: 12px;
            background-color: #007bff;
        }
        /* Estilos para los h1 */
        .h1-black {
            color: #000;
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 0;
        }
        .h1-blue {
            color: #0026ffa1;
            font-size: 2.5rem;
            font-weight: bold;
            margin-top: 0;
        }
        .myborder-span {
            background-color: rgb(93, 108, 241);
            border: 3px solid rgb(40, 40, 255);
        }
        /* Fijar el navbar en móviles */
        @media (max-width: 767.98px) {
  .fixed-mobile {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1050;
    background-color: #fff;
  }
  /* Coloca el collapse absolutamente para que se expanda debajo del navbar */
  .fixed-mobile .collapse {
    position: absolute;
    top: 100%;  /* Justo debajo del navbar */
    left: 0;
    right: 0;
    background-color: #fff;
  }
  body {
    padding-top: 70px; /* Espacio para que el contenido no quede tapado */
  }
}
        /* Hover en el nav y estilo para el span (teléfono) */
        .navbar-nav .nav-link:hover {
            color: #0056b3;
            font-weight: 600;
        }
        .navbar-nav li span {
            color: #fff !important;
        }
    </style>
</head>
<body>
    
<div class="container d-flex flex-wrap">
  <!-- Columna izquierda con información -->
  <div class="col-12 col-md-4">
    <header class="mb-5">
      <img src="/Version.1/Material/images.png" alt="Logo" class="img-fluid" width="120">
    </header>
    <div>
      <h1 class="--bs-info-text-emphasis my-0">Somos un grupo</h1>
      <h1 class="h1-blue">de especialistas</h1>
    </div>
    <div>
      <h4>en todo lo relacionado a la materia de trabajo</h4>
    </div>
    <div>
      <span class="myborder-span p-1">Brindamos acesorias</span>
    </div>
    <div class="responsive1 mt-3">
      <img src="/Version.1/Material/Fondo.jpeg" alt="Fondo" class="img-fluid rounded">
    </div>
  </div>
  <!-- Columna derecha con imagen de fondo y menú superpuesto -->
  <div class="col-12 col-md-8">
    <!-- Navbar desplegable -->
    <nav class="navbar navbar-expand-md navbar-light myborder fixed-mobile mb-5">
      <div class="container-fluid">
        <a class="navbar-brand d-md-none" href="#">Menú</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item mx-3">
              <a class="nav-link text-light" href="#">Nosotros</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link text-light" href="#">Servicios</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link text-light" href="#">Contacto</a>
            </li>
            <li class="nav-item mx-3">
              <span class="nav-link fw-bold text-primary">55 6258 5266</span>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Imagen que queda debajo del navbar -->
    <div class="m-1">
      <img src="/Version.1/Material/fuera.jpg" alt="Fondo" class="w-100 rounded">
    </div>
  </div>
</div>
<div class="container">
  <div class="row mt-1">
    <!-- Primer contenedor: Servicios integrales de Recursos Humanos -->
    <div class="col-md-4 gris">
      <div class="text-center">
        <img class="img" src="/Version.1/Material/1img.png" alt="Recursos Humanos">
        <h6>Servicios integrales de</h6>
        <h3>Recursos humanos</h3>
        <button type="button" id="tres" class="btn btn-success">Leer más</button>
      </div>
    </div>
    <!-- Segundo contenedor: Servicios Legales -->
    <div class="col-md-4 gris">
      <div class="text-center">
        <img class="img" src="/Version.1/Material/img2.png" alt="Legales">
        <h6>Servicios</h6>
        <h3>Legales</h3>
        <button type="button" id="uno" class="btn btn-success">Leer más</button>
      </div>
    </div>
    <!-- Tercer contenedor: Servicios de Tecnologías de la Información -->
    <div class="col-md-4 d-flex justify-content-center align-items-center div3-color">
      <div class="text-center">
        <img class="img" src="/Version.1/Material/img3.png" alt="Tecnologías de la Información">
        <h6>Servicios de <br>tecnologías de la</h6>
        <h3>Información</h3>
        <button type="button" id="dos" class="btn btn-success">Leer más</button>
      </div>
    </div>
  </div>
</div>
<!--Parte 3 here-->
<div class="container"> 
  <div class="container fondo"><!--Segundo contenedor-->
    <div class="container fondo-azul"><!--Contenedor de fondo azul-->
      <!--AQUI SE CREA EL RESPONSIVE PARA QUE ESTE OCULTO Y EN CIERTO TAMAÑO EN ADELANTE APAREZCA-->
      <div class="row d-none d-lg-flex">
        <div class="col-md-6">
          <h2 class="title-desktop text-end">Acerca de nosotros</h2>
          <div class="imagen-desktop">
            <img width="90%" src="/Version.1/Material/fuera.jpg" alt="Equipo de trabajo">
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="m-5">
            <p class="texto mt-1">En materia legal: le ofrecemos nuestra representación jurídica en asuntos laborales; asuntos de seguridad social e impuestos; asuntos de ahorro para el retiro y pensiones; y asuntos de servidores públicos.</p>
            <p class="texto mt-1">Asimismo le proporcionamos asesoría para que cumpla sus obligaciones ante la Secretaría del Trabajo y Previsión Social, el SAT, IMSS, INFONAVIT, INFONACOT y Gobiernos Locales o cualquier otra autoridad federal o local.</p>
            <p class="texto mt-1">En materia de recursos humanos: le ofrecemos el proceso integral para la administración de sus recursos humanos o solo de algunas de sus actividades, como: el reclutamiento y selección, contrataciones, escalafón, elaboración de nóminas, control de asistencia y puntualidad, impuestos locales y federales, seguridad social IMSS, INFONAVIT e INFONACOT, capacitación, seguridad e higiene en el trabajo, revisión de Contrato Colectivo de Trabajo y Reglamento Interno de Trabajo, negociaciones sindicales y todo lo que requiera relacionado al personal.</p>
            <p class="texto mt-1">En materia de tecnologías de la información: le ofrecemos asesoría sobre la implementación y operación del software y hardware más adecuado a sus necesidades, le instalamos cualquier equipo, le capacitamos en su utilización y le realizamos cualquier trabajo que requiera.</p>
          </div>
        </div>
      </div>
      <!--AQUI SE CREA EL RESPONSIVE PARA QUE ESTÉ OCULTO Y DESDE CIERTO TAMAÑO HACIA ABAJO APAREZCA NUEVAMENTE-->
      <div class="row d-lg-none">
        <div class="col-12 text-center">
          <h2 class="mb-3 mt-3 text-white">Acerca de nosotros</h2>
        </div>
        <div class="col-12 px-4">
          <p class="text-white mb-3">En materia legal: le ofrecemos nuestra representación jurídica en asuntos laborales; asuntos de seguridad social e impuestos; asuntos de ahorro para el retiro y pensiones; y asuntos de servidores públicos.</p>
          <p class="text-white mb-3">Asimismo le proporcionamos asesoría para que cumpla sus obligaciones ante la Secretaría del Trabajo y Previsión Social, el SAT, IMSS, INFONAVIT, INFONACOT y Gobiernos Locales o cualquier otra autoridad federal o local.</p>
          <p class="text-white mb-3">En materia de recursos humanos: le ofrecemos el proceso integral para la administración de sus recursos humanos o solo de algunas de sus actividades, como: el reclutamiento y selección, contrataciones, escalafón, elaboración de nóminas, control de asistencia y puntualidad, impuestos locales y federales, seguridad social IMSS, INFONAVIT e INFONACOT, capacitación, seguridad e higiene en el trabajo, revisión de Contrato Colectivo de Trabajo y Reglamento Interno de Trabajo, negociaciones sindicales y todo lo que requiera relacionado al personal.</p>
          <p class="text-white mb-3">En materia de tecnologías de la información: le ofrecemos asesoría sobre la implementación y operación del software y hardware más adecuado a sus necesidades, le instalamos cualquier equipo, le capacitamos en su utilización y le realizamos cualquier trabajo que requiera.</p>
        </div>
        <div class="col-12 text-center mb-4">
          <img style="max-width: 80%;" src="/Version.1/Material/fuera.jpg" alt="Equipo de trabajo">
        </div>
      </div>
    </div>
  </div>
</div>
<!--CONTACTANOS-->
<div class="container ct-asesorias mt-5 ml-5 d-md-block d-none">
  <div class="row">
    <h1 class="col-md-6">Brindamos <span class="text-primary">asesorias gratuitas</span>.</h1>
    <button class="col-md-4 btn btn-primary boton">Contáctanos hoy mismo</button>
  </div>
  <div class="row text">
    <p class="col-md-10">Evítese problemas, conflictos o sanciones derivadas de las relaciones del trabajo, conozca los derechos y obligaciones en materia laboral, administrativo, penal, seguridad social, impuestos y pensiones. <span class="text-primary">Acérquense a nuestro Despacho Consultor Integral DCARHTI.DCI, S.A.S.</span></p>
  </div>
</div>
<div class="container d-flex flex-column align-items-center d-md-none text-center mt-3">
  <h1>Brindamos <span class="text-primary">asesorías gratuitas</span>.</h1>
  <p class="text">Evítese problemas, conflictos o sanciones derivadas de las relaciones del trabajo, conozca los derechos y obligaciones en materia laboral, administrativo, penal, seguridad social, impuestos y pensiones. <span class="text-primary">Acérquense a nuestro Despacho Consultor Integral DCARHTI.DCI, S.A.S.</span></p>
  <button class="btn boton-personalizado btn-primary btn-lg mt-2" type="button">Contáctanos hoy mismo</button>
</div>
<!--Parte del footer-->
<div class="container-fluid contact-container">
  <div class="row flex-column flex-md-row">
    <!-- Información de contacto -->
    <div class="col-md-5 contact-info d-flex flex-column justify-content-center text-md-start text-center div-contact">
      <div class="contenedor">
        <h2 class="fw-bold mb-4">Contacto</h2>
        <div class="d-flex align-items-center gap-3 contact-item mb-3">
          <i class="bi bi-geo-alt-fill text-primary"></i>
          <p class="mb-0">BLVD. Adolfo López Mateos 4293, 300, Tlalpan, CDMX, 14210</p>
        </div>
        <div class="d-flex align-items-center gap-3 contact-item mb-3">
          <i class="bi bi-telephone-fill text-primary"></i>
          <p class="mb-0">55 4774 0586</p>
        </div>
        <div class="d-flex align-items-center gap-3 contact-item">
          <i class="bi bi-envelope-fill text-primary"></i>
          <p class="mb-0"><a href="mailto:dcarhti.dci@gmail.com" class="text-dark text-decoration-none">dcarhti.dci@gmail.com</a></p>
        </div>
      </div>
    </div>
    <!-- Formulario -->
    <div class="d-flex justify-content-start col-md-7 form-container text-md-start text-center">
      <div>
        <div class="container mx-2 text-align-center">
          <p class="text-primary fw-semibold">
            <strong>Llena este sencillo formulario para contactarte lo más pronto posible y brindarte información acerca de nuestros servicios.</strong>
          </p>
        </div>
        <form action="mostrar.php" method="POST">
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
          </div>
          <div class="mb-3">
            <input type="tel" class="form-control" placeholder="Teléfono" name="telefono" required>
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email" required>
          </div>
          <div class="mb-3">
            <textarea class="form-control" placeholder="Mensaje" name="mensaje" rows="3" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">ENVIAR</button>
        </form>
        <br>
        <a href="mostrar.php">Ver Registros</a>
      </div>
    </div>
  </div>
</div>
<!-- Mapa -->
<div class="container-mapa">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.0157937800154!2d-99.2162498258092!3d19.32512094410659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdff8d14242781%3A0xbc241e7997e6c461!2sBlvd.%20Adolfo%20L%C3%B3pez%20Mateos%204293%2C%20Jardines%20en%20la%20Monta%C3%B1a%2C%20Tlalpan%2C%2014210%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX%2C%20M%C3%A9xico!5e0!3m2!1ses-419!2sco!4v1742069756788!5m2!1ses-419!2sco" 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- Footer -->
<footer class="container-fluid py-3 bg-light text-center">
  <h4>Aviso de privacidad</h4> 
  <div class="d-flex align-items-center justify-content-center">
    <h6>Desarrollado por:</h6>
    <img class="ms-2" style="width: 30px;" src="/Version.1/Material/1630652354952.jpeg" alt=""> 
    <img class="ms-3" style="width: 30px;" src="/Version.1/Material/images.png" alt="">
    <img class="ms-3" style="width: 30px;" src="/Version.1/Material/descarga.jpeg" alt="">
    <div class="ms-3" style="border-left: rgb(155, 155, 155) 2px solid;">
      <img style="width: 60px; object-fit: cover;" src="/Version.1/Material/descarga (1).jpeg" alt="">
    </div>
  </div>
</footer>
<footer class="container-fluid py-3 bg-dark text-center d-md-none">
  <h6 style="color: white;" class="mb-3">MÁS INFORMACIÓN</h6>
  
  <div class="d-flex gap-2 mx-auto">
    <button class="btn btn-primary flex-grow-1">
      <i class="fab fa-facebook-f">
        <img style="width:25px;" src="/Version.1/Material/descarga.png" alt="">
      </i>
    </button>
    <button class="btn btn-primary flex-grow-1">
      <i class="fab fa-twitter">
        <img style="width:25px;" src="/Version.1/Material/twitter-new-logo-twitter-icons-new-twitter-logo-x-2023-x-social-media-icon-free-png.webp" alt="">
      </i>
    </button>
  </div>
</footer>
<?php
include ('bd.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST["nombre"]);
    $email = trim($_POST["email"]);
    $telefono = trim($_POST["telefono"]);
    // Validaciones básicas
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Error: Correo electrónico no válido.");
    }
    // Usamos una consulta preparada para evitar SQL Injection
    $sql = $conexion->prepare("INSERT INTO personas (nombre, email, telefono) VALUES (?, ?, ?)");
    $sql->bind_param("sss", $nombre, $email, $telefono);
    if ($sql->execute()) {
        echo "Registro exitoso. <a href='index.php'>Volver</a>";
    } else {
        error_log("Error en la inserción: " . $sql->error);  
        echo "Ocurrió un error al registrar.";
    }
    $sql->close();
}
$conexion->close();
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


