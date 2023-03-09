<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--<link rel="stylesheet" href="../public/style/login.css"> --> 
    <!--<link rel="stylesheet" href="../public/style/navbar.css">--> 
    <!--<link rel="stylesheet" href="../public/style/global.css">--> 
    <!--<link rel="stylesheet" href="../public/style/style.css"> --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>login</title>
    <style>
      body {
        background: rgb(20,0,36);
        background: linear-gradient(90deg, rgba(20,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
      }
      .form-login {
        background-color: #fff;
      }
    </style>
  </head>
  <body>
      <div class="content">
        <div class="">
          <header>
            <nav class="navbar navbar-expand-lg bd-dark navbar-$blue-900">
                <div class="container">
                    <a href="" class="navbar-brand">Logo</a>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item me-3">
                                <a href="#" class="nav-link">Sobre</a>
                            </li>
                            <li class="nav-item me-3">
                                <a href="#" class="nav-link">Forum</a>
                            </li>
                            <li class="nav-item me-3">
                                <a href="#" class="nav-link">Contato</a>
                            </li>
                            <li class="nav-item me-3">
                                <a href="#" class="nav-link">Ajuda</a>
                            </li>
                        </ul>
                        <form class="ms-auto">
                            <button class="btn btn-outline-primary me-2" type="button"><a href="login.html">Logar</a></button>
                            <button class="btn btn-primary me-2" type="button">Criar conta</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        </div>
      </div>
      <div>
        <div class="form-login container w-25 border rounded p-5">
          <h1 class="mb-4">Esqueci Senha</h1>
          <form class="row g-3" method="POST" action="../public/script/php/app/controller/login.php">
            <div class="mb-3">
              <input class="form-control form-control-sm bg-light" type="email" name="email" placeholder="E-mail" id="email" required> 
            </div>
            <div class="mb-3">
              <input type="submit" name="send" value="Enviar" id="send">
            </div>
          </form>
        </div>
      </div>
  </body>
</html>