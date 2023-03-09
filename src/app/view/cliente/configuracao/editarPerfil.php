<?php
  //include('../../verificaLogin.php');
  //include('../../../core/dadosCliente.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
</head>
<body>
  <div>
       <div>
          <nav>
            <a href="./editarPerfil.php">Editar Perfil</a> |
            <a href="./alterarSenha.php">Alterar Senha</a> |
            <a href="./ajudaCliente.php">Ajuda</a> |
            <a href="../painelCliente.php">Voltar</a> |
          </nav>
       </div>
       <div>
        <form action="./clAlterData.php" method="POST">
              <div>
                  <input type="text" name="nome" id="nome" placeholder="Nome"  value="<?php echo $nome ?>" required>
              </div>

              <div>
                  <input type="email"  name="email" id="email" placeholder="E-mail" value="<?php echo $email ?>" required>
              </div>

              <div>
                  <input type="text"  name="telefone" id="telefone" onkeypress="mascara(this)" placeholder="Telefone" value="<?php echo $telefone ?>"required>
              </div>

              <div>
                  <input type="text"  name="cep" id="cep"  onkeypress="mask_cep(this)" placeholder="CEP"  value="<?php echo $cep ?>" required>
              </div>

              <div>
                  <input type="text"  name="rua" id="rua" placeholder="Rua"  value="<?php echo $rua ?>" required>
              </div>

              <div>
                  <input type="text"  name="numero" id="numero" placeholder="Numero" value="<?php echo $numero ?>"required>
              </div>

              <div>
                  <input type="text" name="bairro" id="bairro" placeholder="Bairro" value="<?php echo $bairro ?>" required>
              </div>

              <div>
                  <input type="text"  name="cidade" id="cidade" placeholder="Cidade" value="<?php echo $cidade ?>" required>
              </div>

              <div>
                  <input type="text"  name="uf" id="uf" placeholder="Uf" value="<?php echo $uf ?>" required>
              </div>

              <div>
                  <input type="text"  name="complemento" id="comple" placeholder="Complemento" value="<?php echo $complemento ?>"required>
              </div>

              <input type="submit"  name="salvar" id="salvar" value="Salvar">

              <input type="reset" value="Limpar">
          </form>
      </div>
  </div>
<script src="../../../../../js/consultaCep.js"></script>
<script src="../../../../../js/funcao.js"></script>
</body>
</html>