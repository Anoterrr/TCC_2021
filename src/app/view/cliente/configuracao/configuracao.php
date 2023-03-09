<?php
  //include('../../verificaLogin.php');
?>

<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuração</title>
</head>
<body>
     <!-- Navegation bar -->
     <nav class="navbar shadow navbar-dark bg-primary fixed-top">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand nav-link" href="../../core/logout.php">
            <h2>Histórico/Carteira de vacina</h2>
          </a>
          <a class="navbar-brand nav-link bg-danger" href="../../core/logout.php">Sair</a>
        </div>
      </nav>

      <!-- Left navgation bar -->
      <div class="offcanvas offcanvas-start d-flex flex-column flex-shrink-0 p-3 bg-light" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 280px;">
        <a href="https://davidsonbpe.blogspot.com/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <img src="" alt="" width="50" height="50" class="rounded-circle me-4">
          <span class="fs-4">Usuario</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li>
            <a href="./clinica.php" class="nav-link link-dark">
              <i class="bi bi-list-ul me-2"></i>
              Carteira de vacina
            </a>
          </li>
          <li>
            <a href="../cliente/reserva/reserva.php" class="nav-link link-dark">
              <i class="bi bi-list-ul me-2"></i>
              Reserva de vacina
            </a>
          </li>
          <li>
            <a href="./clinica.php" class="nav-link link-dark">
              <i class="bi bi-list-ul me-2"></i>
              Histórico
            </a>
          </li>
          <li>
            <a href="./mapaClinica/mapaClinica.php" class="nav-link link-dark">
              <i class="bi bi-list-ul me-2"></i>
              Mapa de Clinica
            </a>
          </li>
          <li>
            <a href="./calendario/calendario.php" class="nav-link link-dark">
              <i class="bi bi-list-ul me-2"></i>
              Calendário
            </a>
          </li>
          <li class="nav-item">
            <a href="./configuracao/editarPerfil.php" class="nav-link link-dark" aria-current="page">
              <i class="bi bi-house-door-fill me-2"></i>
              Configuração
            </a>
          </li>
          <li>
            <a href="../../core/logout.php" class="nav-link link-dark bg-danger w-47">
              <i class="bi bi-list-ul me-2"></i>
              Sair
            </a>
          </li>
        </ul>
      </div>
</body>
</html>