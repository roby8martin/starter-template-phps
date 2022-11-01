<?php
	session_start();
	include '../dbconfig.php';
  include 'struttura.php';
	include 'error.php';

	if (isset($_SESSION['session_id'])) {
  $session_user = htmlspecialchars($_SESSION['session_user'], ENT_QUOTES, 'UTF-8');
  $session_id = htmlspecialchars($_SESSION['session_id']);
  

  $sqlban= 'SELECT `USERNAME`, `BAN`, `MOTIVOBAN` FROM `USERS` WHERE `USERNAME` = "'.$session_user.'"';
  $resultban = mysqli_query($conn, $sqlban);
	$rowban = mysqli_fetch_array($resultban);
	session_regenerate_id();
  $_SESSION['ban'] = $rowban['BAN'];
	
		if ($rowban['BAN'] == '1') {
			echo $ban.'



          <div class="container">
            <div class="row">
              <div class="col-12">
                <h1>Hello World</h1>
                <h2 class="text-danger" align="center">'.$session_user.' sei stato bannato dal sito</h2>
                <p align="center">Motivo Ban: '.utf8_encode($rowban['MOTIVOBAN']).'</p>
                <div align="center"><img src="../img/spongebob-ban.gif" alt="Gif logo ban" width="400"></div>
              </div>
            </div>
          </div>

          <!-- Footer -->
          <?php echo $footer; ?>
          <!-- Bootstrap JS -->
          <script src="js/bootstrap.js"></script>
      
        </body>
      </html>
';
exit;
		} else {
			header('location: index.php');
		}
	} else{header('Location: ../index.php?error=3');}		
?>