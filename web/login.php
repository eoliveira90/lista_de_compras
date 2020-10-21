<?php
  include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Lista de mercado</title>
    
    <link href="<?= $site ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="<?= $site ?>css/login.css?v2=<?= time() ?>" rel="stylesheet">
  </head>

  <body>
    <div class="container">
      <div align="center">
        <img src="<?= $site ?>imagens/cadeado.png" align="center"/>
      </div>
      <form class="form-signin" method="POST" action="<?= $site ?>dao/verifica_login.php">
        <h2 class="form-signin-heading" align="center">Acesso Restrito</h2>

        <label for="inputEmail" class="sr-only">Login</label>
        <input type="text" id="inputEmail" name="login" class="form-control" placeholder="Login" required autofocus/>

        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required />

        <button class="btn btn-lg btn-primary btn-block" name="entrar" type="submit">Entrar</button>

        <?php
          if (isset($_GET['erro'])) {
            echo '<div class="alert alert-danger error">Login ou senha inválidos!</div>';
          } elseif (isset($_GET['success'])) {
            echo '<div class="alert alert-success error">Login feito com sucesso!</div>';
          }
        ?>
      </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?= $site ?>bootstrap/js/bootstrap.min.js"></script>
  <body>
</html>
