<?php

	include '../dbconfig.php';
	include 'error.php';

	if (isset($_SESSION['session_id'])) {
  $session_user = htmlspecialchars($_SESSION['session_user'], ENT_QUOTES, 'UTF-8');
  $session_id = htmlspecialchars($_SESSION['session_id']);
  

  $sqlban= 'SELECT `USERNAME`, `BAN` FROM `USERS` WHERE `USERNAME` = "'.$session_user.'"';
	$resultban = mysqli_query($conn, $sqlban);
	$rowban = mysqli_fetch_array($resultban);
}else{}
?>