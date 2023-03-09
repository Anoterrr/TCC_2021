<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Configurações</title>

    <!-- Format -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />

    <!-- View Port -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />

    <!-- Style Sheets -->
    <link rel="stylesheet" href="../public/style/bootstrap.min.css">
</head>
<body>

    <div class="container">
        
        <!-- Navegation basic -->
    <nav class="navbar shadow navbar-dark bg-primary fixed-top">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
          aria-controls="offcanvasExample">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand nav-link" href="../../core/logout.php"><h2>Histórico/Carteira de vacina</h2></a>
        <a class="navbar-brand nav-link bg-danger" href="../../core/logout.php">Sair</a>
      </div>
    </nav>

    <div class="offcanvas offcanvas-start d-flex flex-column flex-shrink-0 p-3 bg-light" tabindex="-1"
      id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 280px;">
      <a href="https://davidsonbpe.blogspot.com/"
        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <img src="" alt="" width="50" height="50" class="rounded-circle me-4">
        <span class="fs-4">Editar Perfil</span>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li>
          <a href="./confAjuda.php" class="nav-link link-dark">
            <i class="bi bi-list-ul me-2"></i>
            Ajuda
          </a>
        </li>
        <li>
          <a href="./excluirConta.php" class="nav-link link-dark">
            <i class="bi bi-list-ul me-2"></i>
            Excluir Conta
          </a>
        </li>
        <li>
          <a href="./confEditPerfil" class="nav-link link-dark">
            <i class="bi bi-list-ul me-2"></i>
            Editar Perfil
          </a>
        </li>
        <li>
          <a href="./clinica.php" class="nav-link link-dark">
            <i class="bi bi-list-ul me-2"></i>
            Mapa de Clinica
          </a>
        </li>
        <li>
          <a href="./clinica.php" class="nav-link link-dark">
            <i class="bi bi-list-ul me-2"></i>
            Calendário
          </a>
        </li>
        <li class="nav-item">
          <a href="./painelAdm.php" class="nav-link link-dark" aria-current="page">
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

    </div>

    <div>
        <h2>Configurações</h2>
    </div>

    <div>
        <ul>
            <li>Editar Perfil</li>
            <li>Alterar Senhar</li>
            <li>Ajuda</li>
            <li>Localização</li>
            <li>Excluir Conta</li>
        </ul>
    </div>

        <div>
            <form action="" method="GET">
                <div>
                    <input type="text" name="name" id="name" placeholder="Nome">
                </div>

                <div>
                    <input type="text" name="cep" id="cep" placeholder="Cep">
                </div>

                <div>
                    <input type="text" name="number" id="number" placeholder="Numero">
                </div>

                <div>
                    <input type="text" name="city" id="city" placeholder="Cidade">
                </div>

                <div>
                    <input type="text" name="complet" id="complet" placeholder="Complemento">
                </div>

                <div>
                    <input type="text" name="rua" id="rua" placeholder="Rua">
                </div>

                <div>
                    <input type="text" name="bairro" id="bairro" placeholder="Bairro">
                </div>

                <div>
                    <input type="text" name="uf" id="uf" placeholder="UF">
                </div>

                <div>
                    <input type="text" name="email" id="email" placeholder="E-mail">
                </div>

                <!-- botões salvar e voltar -->

                <input type="submit" name="enviar" id="enviar" value="Cadastrar">

                <input type="button" name="voltar" id="voltar" value="Voltar">

            </form>
        </div>
        <script src="../public/script/js/consultaCep.js"></script>
</body>
</html>