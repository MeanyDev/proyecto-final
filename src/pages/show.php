<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio</title>
    <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="../css/nav.css" />
    <link rel="stylesheet" href="../css/show.css" />
    <link
      rel="stylesheet"
      crossorigin="anonymous"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
  </head>
  <body class="bg-dark">
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
    <hr class="border-secondary mt-0" />
    <main>
      <?php

        require '../../vendor/autoload.php';

        $dotenv = Dotenv\Dotenv::createImmutable('../../');
        $dotenv->load();

        $host = $_ENV['MYSQL_HOST'];
        $user = $_ENV['MYSQL_USER'];
        $password = $_ENV['MYSQL_PASSWORD'];
        $db = $_ENV['MYSQL_DATABASE'];
        $port = $_ENV['MYSQL_PORT'];
        
        $conn = new mysqli($host, $user, $password, $db, $port);
        $sql = "SELECT * FROM alumnos";
        $query = $conn->query($sql);

        if ($query->num_rows > 0) {
          echo '
            <table class="table table-dark table-hover table-borderless">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Primer Nombre</th>
                  <th>Segundo Nombre</th>
                  <th>Apellido Paterno</th>
                  <th>Apellido Materno</th>
                  <th>Email</th>
                  <th>Telefono</th>
                  <th>Grado</th>
                  <th>Grupo</th>
                </tr>
              </thead>
              <tbody>
          ';

          while($row = $query->fetch_assoc()) {
            echo '
              <tr>
                <td>' . $row["id"] . '</td>
                <td>' . $row["nombre1"] . '</td>
                <td>' . $row["nombre2"] . '</td>
                <td>' . $row["paterno"] . '</td>
                <td>' . $row["materno"] . '</td>
                <td>' . $row["email"] . '</td>
                <td>' . $row["telefono"] . '</td>
                <td>' . $row["grado"] . '</td>
                <td>' . $row['grupo'] . '</td>
              </tr>
            '; 
          } 
          
          echo '
              </tbody>
            </table>
          '; 
        } else {
          echo '0 results';
        } 
        
        $conn->close();
        
      ?>
    </main>
    <footer class="bg-dark">
      <p class="text-light text-center m-0 fs-5">Contacto</p>
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="https://github.com/MeanyDev" target="_blank" id="github">
            <i class="bi bi-github"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://discord.gg/cSKy2tGKmh" target="_blank" id="discord">
            <i class="bi bi-discord"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.instagram.com/lobilux_uwu/" target="_blank">
            <i class="bi bi-instagram" id="instagram"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://twitter.com/LobiLux_UwU" target="_blank">
            <i class="bi bi-twitter d-inline-block text-center" id="twitter"></i>
          </a>
        </li>
      </ul>
    </footer>
    <script src="../js/filter.js"></script>
    <script
      crossorigin="anonymous"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    ></script>
  </body>
</html>
