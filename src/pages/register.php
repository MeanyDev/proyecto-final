<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrarse</title>
    <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="../css/nav.css" />
    <link rel="stylesheet" href="../css/register.css" />
    <link rel="stylesheet" href="../css/noscrollbar.css" />
    <link
      rel="stylesheet"
      crossorigin="anonymous"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand bg-dark">
        <div class="container-fluid">
          <div class="col d-flex justify-content-start">
            <a href="https://github.com/MeanyDev" class="navbar-brand fw-bold nav-link" target="_blank">
              <img src="../img/icon.png" alt="Logo" width="30" class="pb-1" />
              MeanyDev
            </a>
            <div class="collapse navbar-collapse">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a href="../../index.html" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item">
                  <a href="./author.html" class="nav-link">Autor</a>
                </li>
                <li class="nav-item">
                  <a href="./clock.html" class="nav-link">Reloj</a>
                </li>
                <li class="nav-item">
                  <a href="https://github.com/MeanyDev/proyecto-final" class="nav-link" target="_blank">Repositorio del Código</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col d-flex justify-content-end me-3">
            <div class="dropdown-center">
              <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown">Base de Datos</button>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li>
                  <a class="dropdown-item" href="./register.php">Registrarse</a>
                </li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li>
                  <a class="dropdown-item" href="./show.php">Mostrar Registros</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <main class="col-10 mx-auto mt-3">
      <form action="./register.php" method="post">
        <div class="input-group mb-3">
          <label for="nombre1" class="input-group-text">Primer Nombre</label>
          <input type="text" name="nombre1" id="nombre1" placeholder="Primer Nombre" class="form-control" autofocus />
        </div>
        <div class="input-group mb-3">
          <label for="nombre2" class="input-group-text">Segundo Nombre</label>
          <input type="text" name="nombre2" id="nombre2" placeholder="Segundo Nombre" class="form-control" />
        </div>
        <div class="input-group mb-3">
          <label for="paterno" class="input-group-text">Apellido Paterno</label>
          <input type="text" name="paterno" id="paterno" placeholder="Apellido Paterno" class="form-control" />
        </div>
        <div class="input-group mb-3">
          <label for="materno" class="input-group-text">Apellido Materno</label>
          <input type="text" name="materno" id="materno" placeholder="Apellido Materno" class="form-control" />
        </div>
        <div class="input-group mb-3">
          <label for="email" class="input-group-text">Email</label>
          <input type="email" name="email" id="email" placeholder="Email" class="form-control" />
        </div>
        <div class="input-group mb-3">
          <label for="telefono" class="input-group-text">Telefono</label>
          <input type="tel" name="telefono" id="telefono" placeholder="Telefono" class="form-control" />
        </div>
        <div class="input-group mb-3">
          <label for="grado" class="input-group-text">Grado</label>
          <input type="number" name="grado" id="grado" placeholder="Grado" class="form-control" />
        </div>
        <div class="input-group mb-3">
          <label for="grupo" class="input-group-text">Grupo</label>
          <input type="text" name="grupo" id="grupo" placeholder="Grupo" class="form-control" />
        </div>
        <button type="submit" name="Enviar" class="btn btn-primary">Enviar</button>
      </form>
    </main>
    <footer class="bg-dark">
      <p class="text-light text-center m-0 fs-5">Contacto</p>
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="https://github.com/MeanyDev" target="_blank">
            <i class="bi bi-github" id="github" title="GitHub"> GitHub</i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.instagram.com/lobilux_uwu/" target="_blank">
            <i class="bi bi-instagram" id="instagram" title="Instagram"> Instagram</i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://twitter.com/LobiLux_UwU" target="_blank">
            <i class="bi bi-twitter d-inline-block text-center" id="twitter" title="Twitter"> Twitter</i>
          </a>
        </li>
      </ul>
    </footer>
    <script
      crossorigin="anonymous"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    ></script>
  </body>
</html>
<a href="../../vendor/autoload.php"></a>

<?php

  require '../../vendor/autoload.php';

  $dotenv = Dotenv\Dotenv::createImmutable('../../');
  $dotenv->load();

  if (isset($_POST['Enviar'])) {

    $nombre1 = $_POST['nombre1'];
    $nombre2 = $_POST['nombre2'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $grado = $_POST['grado'];
    $grupo = $_POST['grupo'];

    $host = $_ENV['MYSQL_HOST'];
    $user = $_ENV['MYSQL_USER'];
    $password = $_ENV['MYSQL_PASSWORD'];
    $db = $_ENV['MYSQL_DATABASE'];
    $port = $_ENV['MYSQL_PORT'];

    $conn = new mysqli($host, $user, $password, $db, $port);
    $sql = "INSERT INTO alumnos VALUES (NULL, '$nombre1', '$nombre2', '$paterno', '$materno', '$email', '$telefono', '$grado', '$grupo')";
    $query = $conn->query($sql); 
    
    $conn->close();

  } 

?>
