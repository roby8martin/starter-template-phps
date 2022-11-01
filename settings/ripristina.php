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

$id = $_GET['cliente'];
$sql='UPDATE `CLIENTI` SET `ATTIVO` = 1, NEL_CESTINO = 0, CESTINATO = 0 WHERE `ID` = '.$id.'';
$result = mysqli_query($conn, $sql);
header('location: cestino.php');

}else{header('location: matipare.php');}
}else{header('location: ../sito/ban.php');}
}else{header('location: ../sito/ban.php');}
}else{echo $errore3;}
?>