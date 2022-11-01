<?php
	include '../dbconfig.php';
	include 'error.php';

	$token = $_GET['token'] ?? '';
	$user = $_GET['user'] ?? '';

	$sql = 'SELECT `TOKEN`, `ATTIVO` FROM `USERS` WHERE `TOKEN` LIKE "'.$token.'" OR `USERNAME` = "'.$user.'"';
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	if ($row['1'] === '1') {
		echo $errore11; 
	} else {
		$sql = 'UPDATE `USERS` SET `ATTIVO` = "1" WHERE `TOKEN` = "'.$token.'"';
		$result = mysqli_query($conn, $sql);
		$sql1 = 'UPDATE `USERS` SET `TOKEN` = "" WHERE `USERNAME` = "'.$user.'"';
		$result = mysqli_query($conn, $sql1);
		echo $okattivo;
	}

?>