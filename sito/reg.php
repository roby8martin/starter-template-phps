<?php
	include '../dbconfig.php';
	include 'error.php';

  $username = $_POST['username'] ?? '';
  $password = $_POST['password'] ?? '';
  $password2 = $_POST['passwordconf'] ?? '';
  $data = date("d/m/Y", time());
  $isUsernameValid = filter_var(
    $username,
    FILTER_VALIDATE_REGEXP, [
        "options" => [
            "regexp" => "/^[a-z\d_]{3,20}$/i"
        ]
    ]
	);
	$pwdLenght = mb_strlen($password);
 	
 	if (empty($username) || empty($password)) {
      header('location: ../settings/reg.php?error=4');
    } elseif (false === $isUsernameValid) {
      header('location: ../settings/reg.php?error=5');
    } elseif ($pwdLenght < 8 || $pwdLenght > 20) {
      header('location: ../settings/reg.php?error=6');
    } else {

   		$pw1 = hash('sha512', $password);
  		$pw2 = hash('sha512', $password2);

		  $check_user='SELECT `USERNAME` FROM `USERS` WHERE `USERNAME` LIKE "'.$username.'"';

		  $result_user = mysqli_query($conn, $check_user);
		  $row_user = mysqli_fetch_all($result_user);

		  if (count($row_user) > 0) {
        header('location: ../settings/reg.php?error=7');        
		  } else {
        if ($pw1 === $pw2) {
          $token = hash('md5', $username); 
          $insert = 'INSERT INTO `USERS` (`USERNAME`, `PASSWORD`, `ATTIVO`, `ADMIN`, `CESTINO`, `BAN`, `MOTIVOBAN`, `DATA`) VALUES ("'.$username.'", "'.$pw1.'", "1", "0", "0", "1", "L\'amministratore non ti ha approvato", "'.$data.'")';
          $result = mysqli_query($conn, $insert);
          header('location: ../settings/reg.php?error=ok');
        } else {
          header('location: ../settings/reg.php?error=10');  
        }
		  }
		}

  



?>