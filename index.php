<?php
session_start();

if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:' . $site . 'login.php');
}

$logado = $_SESSION['nome'];

include "config.php";
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
  <link href="<?= $site ?>css/style.css?v2=<?= time() ?>" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php?page=">Lista de mercado</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php?page=">Minha conta</a></li>
          <!--<li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Unidades <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Adicionar</a></li>
              <li role="separator" class="divider"></li>
              !--<li class="dropdown-header">Nav header</li>--
              <li><a href="#">Ver todas</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Marcas <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Adicionar</a></li>
              <li role="separator" class="divider"></li>
              !--<li class="dropdown-header">Nav header</li>--
              <li><a href="#">Ver todas</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produtos <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Adicionar</a></li>
              <li role="separator" class="divider"></li>
              !--<li class="dropdown-header">Nav header</li>--
              <li><a href="#">Ver todas</a></li>
            </ul>
          </li>-->
        </ul>
        <ul class="nav navbar-nav navbar-right">

          <!--<form class="navbar-form navbar-left" role="search" name="busca" action="index.php">
            <div class="form-group">
              <input type="hidden" name="page" value="listar_contatos" />
              <input type="text" name="contato" class="form-control" placeholder="Buscar (Nome ou código)">
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
          </form>-->

          <div class="navbar-header">
            <span class="navbar-brand">
              acessando com <strong><?= $_SESSION['login']; ?></strong>
            </span>
          </div>

          <li><a href="logout.php?sair=logout">Sair</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
    <?php
    $page = '';
    if (empty($_REQUEST['page'])) {
      include('welcome.php');
    } else {
      $pagina = $_REQUEST['page'];
      include($pagina . '.php');
    }
    ?>
  </div>

  <?php //mysqli_close($con); ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="<?= $site ?>bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
