<?php
session_start();
include '../sito/error.php';
include '../sito/struttura.php';
include '../sito/navbar.php';
include '../sito/controlloban.php';
if (isset($_SESSION['session_id'])) {
if (isset($_SESSION['ban'])) {
if ($rowban['BAN'] === '0') {



  $session_user = htmlspecialchars($_SESSION['session_user'], ENT_QUOTES, 'UTF-8');
	$session_user_admin = htmlspecialchars($_SESSION['session_user_admin']);
  $session_id = htmlspecialchars($_SESSION['session_id']);
  $password = $_POST['password'];
  $pw1 = $_POST['pw1'];
  $pw2 = $_POST['pw2'];


  if (empty($session_user) || empty($password)) {
    header('Location: index.php?error=2'); //echo $errore2;
  } else {
  	$sql= 'SELECT `ID`, `USERNAME`, `PASSWORD`, `ATTIVO` FROM `USERS` WHERE `USERNAME` = "'.$session_user.'"';
  	$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
		$pw = hash('sha512', $password);
    $pw1 = hash('sha512', $pw1);
    $pw2 = hash('sha512', $pw2);

		if (empty($row['USERNAME'])) {
			header('Location: ../index.php?error=1'); //echo $errore1;
		} else {
			if ($row['ATTIVO'] === '1') {
				if ($row['PASSWORD'] === $pw) {
          if ($pw1 === $pw2) {
            $sql= 'UPDATE `USERS` SET `PASSWORD` = "'.$pw1.'" WHERE `ID` = "'.$row['ID'].'"';
            echo $sql;
            $result = mysqli_query($conn, $sql);
        
            header('Location: index.php?error=ok');
            exit;
          } else{
            header('Location: index.php?error=14'); //echo $errore14;
          }
				} else{
					header('Location: index.php?error=12'); //echo $errore12;
				}
			} else {
				header('Location: ../index.php?error=13'); //echo $errore13;
			}	
		}	
  }


}else{header('location: ../sito/ban.php');}
}else{header('location: ../sito/ban.php');}
}else{header('Location: ../index.php?error=3');}
?>