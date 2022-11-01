<?php
	session_start();
	include '../dbconfig.php';
	include 'error.php';

	$username = $_POST['username'] ?? '';
	$password = $_POST['password'] ?? '';

	if (isset($_SESSION['session_id'])) {
    header('Location: index.php');
    exit;
	}

  if (empty($username) || empty($password)) {
    header('Location: ../index.php?error=2'); //echo $errore2;
  } else {
  	$sql= 'SELECT `ID`, `USERNAME`, `PASSWORD`, `ATTIVO`, `ADMIN`, `BAN` FROM `USERS` WHERE `USERNAME` = "'.$username.'"';
  	$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
		$pw = hash('sha512', $password);

		if (empty($row['USERNAME'])) {
			header('Location: ../index.php?error=1'); //echo $errore1;
		} else {
			if ($row['ATTIVO'] === '1') {
				if ($row['PASSWORD'] === $pw) {
	       session_regenerate_id();
	        $_SESSION['session_id'] = session_id();
	        $_SESSION['session_user'] = $row['USERNAME'];
					$_SESSION['session_user_id'] = $row['ID'];
					$_SESSION['session_user_admin'] = $row['ADMIN'];
	        $_SESSION['check'] = 'valoreCheck';
	        header('Location: index.php');
	        exit;
				} else{
					header('Location: ../index.php?error=12'); //echo $errore12;
				}
			} else {
				header('Location: ../index.php?error=13'); //echo $errore13;
			}	
		}	
  }
?>