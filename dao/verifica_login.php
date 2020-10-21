<?php

include_once('../config.php');

session_start();

$login = $_POST['login'];
$senha = md5($_POST['senha']);

$query = "SELECT * FROM usuarios WHERE login = '".$login."' AND senha = '".$senha."';";

$dados = $con->query($query)->fetchArray();

if ($dados) {
  $_SESSION['login'] = $login;
  $_SESSION['senha'] = $senha;
  $_SESSION['nome'] = $dados['nome'];
  header('location:'. $site . 'index.php');
} else {
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  header('location:'.$site.'login.php?erro=1');
}

/*$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
  
} else {
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  header('location:'.$site.'login.php?erro=1');
}*/
