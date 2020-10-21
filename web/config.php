<?php

$url = (isset($_SERVER['HTTPS']) ? "https://" : "http://"); 

$url .= $_SERVER['HTTP_HOST']. str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

$site = $url . '/web/';

$db_name = realpath(__DIR__) . DIRECTORY_SEPARATOR . 'database.db';

$con = new SQLite3($db_name);
/*
echo $db_name;

//$con = new PDO('sqlite:' . $db_name);

$db_uri  = 'localhost';
$db_user = 'root';
$db_pass = 'aEOb2Jk563JTirc3';
$db_name = 'bd_agenda';

$con = mysqli_connect($db_uri, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()) {
  echo 'Falha ao se conectar com o MySQL: ' . mysqli_connect_errno();
  exit();
}

mysqli_select_db($con, $db_name);*/
