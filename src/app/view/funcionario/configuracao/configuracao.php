<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../../public/style/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="
    sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
         .config {
            margin-top: 90px;
        }
    </style>
</head>
<body>

<div class="container">
        <nav class="navbar shadow navbar-dark bg-primary fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand nav-link" href="painelFuncionario.php"><h2>Configuração</h2></a>
                <a class="navbar-brand nav-link bg-danger" href="../../../app/core/logout.php">Sair</a>
            </div>
        </nav>
        <div class="offcanvas offcanvas-start d-flex flex-column flex-shrink-0 p-3 bg-light" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 280px;">
            <a href="https://davidsonbpe.blogspot.com/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <img src="" alt="" width="50" height="50" class="rounded-circle me-4">
                <span class="fs-4">Funcionario</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="painelFuncionario.php" class="nav-link link-dark" aria-current="page">
                        <i class="bi bi-house-door-fill me-2"></i>
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="reserva.php" class="nav-link link-dark" aria-current="page">
                        <i class="bi bi-house-door-fill me-2"></i>
                        Reserva
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link link-dark" aria-current="page">
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

        <div class="config">
            <ul class="nav nav-tabs justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../configuracao/vacina.php">Senha</a>
                </li>
            </ul>
        </div>
    </div>

</body>
</html>