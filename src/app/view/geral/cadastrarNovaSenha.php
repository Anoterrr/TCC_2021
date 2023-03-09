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
          <header id="navbar">
            <a href="#" class="logo">Logo</a>
            <ul>
                <li><a href="#">Fórum de noticias</a></li>
                <li><a href="sobreNos.html">Sobre nós</a></li>
                <li><a href="">Entre em contato<a></li>
                <li><a href="login.html" class="login">Logar</a></li>
                <li><a href="cadastroUsuario.html" class="register">Registrar</a></li>
            </ul>
          </header>
        </div>
      </div>
      <div>
        <div class="form-login container w-25 border rounded p-5">
          <h1 class="mb-4">Alterar Senha</h1>
          <form class="row g-3" method="POST" action="../public/script/php/app/controller/login.php">
            <div class="mb-3">
              <input class="form-control form-control-sm bg-light" type="password" name="senhaAtual" placeholder="Digite a senha atual" id="senhaAtual" required> 
            </div>
            <div class="mb-3">
              <input class="form-control form-control-sm bg-light" type="password" name="novaSenha" placeholder="Digite a nova Senha" id="novaSenha" required>
            </div>
            <div class="mb-3">
              <input class="form-control form-control-sm bg-light" type="password" name="confirm" placeholder="Confirmar Senha" id="confirm" required>
            </div>
            <div class="mb-3">
              <input type="submit" name="send" value="Enviar" id="send">
            </div>
          </form>
        </div>
      </div>
  </body>
</html>