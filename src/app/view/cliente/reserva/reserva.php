<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
    <link rel="stylesheet" href="../../../../../public/style/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../../public/js/bootstrap.bundle.min.js">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        section {
            margin-top: 120px;
            margin-left: 130px;
            margin-right: 0px;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['usuario'])) {
    ?>
        <!-- Constainer basic -->
        <div class="container">

            <!-- Navegation bar -->
            <nav class="navbar shadow navbar-dark bg-primary fixed-top">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand nav-link" href="../../core/logout.php">
                        <h2>Reserva Vacina</h2>
                    </a>
                    <a class="navbar-brand nav-link bg-danger" href="../../../core/logout.php">Sair</a>
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
                        <a href="./clinica.php" class="nav-link link-dark">
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
                        <a href="../../../core/logout.php" class="nav-link link-dark bg-danger w-47">
                            <i class="bi bi-list-ul me-2"></i>
                            Sair
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Divider to adjust the content -->
        <div class="divide mt-5"><br></div>
            <div class="alert alert-info p-3 text-center" role="alert">Para a sua comodidade o sistema apenas trás clinicas no seu mesmo estado e cidade!</div>

        <div class="container">
            <section class="w-75 p-3 border justify-items-center justify-content-center">
                <form class="row g-3" method="POST" action="../../../core/reserva.php">
                    <div class="col-md-6">
                        <label for="inputZip" class="form-label">Vacina</label>
                        <select name="nomeVacina" class="form-select" aria-label="Default select example">
                            <?php
                            include('../../../common/fcq.php');
                            $resultado = retornaNome();
                            foreach ($resultado as $dados) {
                                echo '<option value=' . $dados['id'] . '>' . $dados['nome'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword" class="form-label">Data</label>
                        <input type="date" name="dataReserva" class="form-control" id="inputEmail4" maxlength="20" required />
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Horario</label>
                        <input type="time" name="horarioReserva" class="form-control" id="inputCity" maxlength="30" required />
                    </div>
                    <div class="col-md-6">
                        <label for="inputZip" class="form-label">Clinica</label>
                        <select name="nomeClinica" class="form-select" aria-label="Default select example">
                            <?php
                            $id = $_SESSION['usuario'];
                            $idUsuario = $id['id'];
                            $resultado = searchClinics($idUsuario);
                            foreach ($resultado as $dados) {
                                echo '<option value=' . $dados['id'] . '>' . $dados['nome'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="reservar" value="Reservar" class="btn btn-primary w-23">
                        <input type="reset" id="limpar" class="btn btn-primary w-20" name="limpar" value="Limpar" placeholder="Last name" aria-label="Last name">
                    </div>
                </form>
            </section>
        </div>

        <script src="/TCC_2021-main/public/js/createCadsUser.js"></script>
    <?php
    } else {
        header("location: //localhost/TCC_2021-main/src/");
    }
    ?>
</body>

</html>