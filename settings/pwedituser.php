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
  
  $user = $_POST['user'];
  $pw1 = $_POST['pw1'];
  $pw2 = $_POST['pw2'];
  


  if (empty($session_user) || empty($pw1) || empty($pw2)) {
    header('Location: pwuser.php?error=2&utente='.$user.''); //echo $errore2;
  } else {
  	$sql= 'SELECT `ID`, `USERNAME`, `PASSWORD`, `ATTIVO` FROM `USERS` WHERE `ID` = "'.$user.'"';
  	$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
    $pw1 = hash('sha512', $pw1);
    $pw2 = hash('sha512', $pw2);

		if (empty($row['USERNAME'])) {
			header('Location: ../index.php?error=1&utente='.$user.''); //echo $errore1;
		} else {
			if ($row['ATTIVO'] === '1') {
        if ($pw1 === $pw2) {
          $sql= 'UPDATE `USERS` SET `PASSWORD` = "'.$pw1.'" WHERE `ID` = "'.$row['ID'].'"';
          echo $sql;
          $result = mysqli_query($conn, $sql);
      
          header('Location: pwuser.php?error=ok&utente='.$user.'');
          exit;
        } else{
          header('Location: pwuser.php?error=14&utente='.$user.''); //echo $errore14;
        }
			} else {
				header('Location: ../pwuser.php?error=13&utente='.$user.''); //echo $errore13;
			}	
		}
  }


}else{header('location: ../sito/ban.php');}
}else{header('location: ../sito/ban.php');}
}else{header('Location: ../index.php?error=3');}
?>