<?php
$win_or_lin="win";

switch ($win_or_lin) {
  case 'win':
    $nome = "WINDOWS";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "STARTER";
  break;

  case 'lin':
    $nome = "LINUX";
    $servername = "localhost";
    $username = "admin";
    $password = "admin";
    $dbname = "STARTER";
  break;
  
  default:
    echo '<h1 style="color: #ff0000;">!!ATTENZIONE - NON È STATO IMPOSTATO IL TIPO DI SISTEMA OPERATIVO!!</h1> <br><br>';
    $nome = "DEFALUT";
    $servername = "localhost";
    $username = "default";
    $password = "";
    $dbname = "LTDM";
  break;
}

$conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
      echo 'Attualmente il sito sta funzionado su: '.$nome.' <br><br>';
      die("Connection failed: " . mysqli_connect_error());
    }


?>