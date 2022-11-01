<?php
session_start();
include '../sito/error.php';
include '../sito/struttura.php';
include '../sito/controlloban.php';
if (isset($_SESSION['session_id'])) {
if (isset($_SESSION['ban'])) {
if ($rowban['BAN'] === '0') {
  
$session_user_admin = htmlspecialchars($_SESSION['session_user_admin']);
if ($session_user_admin == '1') {

$id = $_GET['utente'];
$stato = $_GET['stato'];
if ($stato == '1') {
  $sql='UPDATE `USERS` SET `ADMIN` = "0" WHERE `ID` = '.$id.'';
  $result = mysqli_query($conn, $sql);
  header('location: utenti.php');
}else{
  $sql='UPDATE `USERS` SET `ADMIN` = "1" WHERE `ID` = '.$id.'';
  $result = mysqli_query($conn, $sql);
  header('location: utenti.php');
}


}else{header('location: index.php');}
}else{header('location: ../sito/ban.php');}
}else{header('location: ../sito/ban.php');}
}else{header('Location: ../index.php?error=3');}
?>