<?php
session_start();
include '../sito/error.php';
include '../sito/struttura.php';
include '../sito/navbar.php';
include '../sito/controlloban.php';
if (isset($_SESSION['session_id'])) {
if (isset($_SESSION['ban'])) {
if ($rowban['BAN'] === '0') {
include '../mobile/Mobile_Detect.php';

	$session_user = htmlspecialchars($_SESSION['session_user'], ENT_QUOTES, 'UTF-8');
	$session_user_admin = htmlspecialchars($_SESSION['session_user_admin']);
  $session_id = htmlspecialchars($_SESSION['session_id']);

  echo $settings;
  if (isset($_GET['error'])) {
    switch ($_GET['error']) {
      case '2': echo $errore2; break;
      case '12': echo $errore12; break;
      case '13': echo $errore13; break;
      case '14': echo $errore14; break;
      case 'ok': echo $ok; break;
      default: break;
    }
  }

  $utente = $_GET['utente'];
  $sql = 'SELECT * FROM `USERS` WHERE `ID` LIKE "'.$utente.'"';
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  
  if ($row['BAN'] == '1') {
    $check1 = 'checked';
    $check2 = '';
  }else{
    $check1 = '';
    $check2 = 'checked';
  }
?>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>Hello World</h1> 
          <h2> Ciao <?php echo $session_user?> 👋 </h2>
          <?php if ($session_user_admin == 1){echo '<h4>Privilegi admin attivi</h4> <br>';}else{echo '';}?>
          <h2>Stai modificando le impostazioni di ban per l'utente <?php echo $row['USERNAME'] ?> <i class="fas fa-user-slash"></i></h2> 
          <div class="col-sm-12">
            <a href="utenti.php" class="btn btn-outline-primary">Torna indietro <i class="fas fa-chevron-left"></i></a>
            <?php
              $detect = new Mobile_Detect;
  
              // Any mobile device (phones or tablets).
              if ( $detect->isMobile() ) {
              echo '<br><br>';
              }
            ?>
            <a class="btn btn-outline-primary" href="reg.php">Aggiungi utenti al sito web <i class="fas fa-user-plus"></i></a>
            <?php
              $detect = new Mobile_Detect;
  
              // Any mobile device (phones or tablets).
              if ( $detect->isMobile() ) {
              echo '<br><br>';
              }
            ?>
            <br><br>
          </div>
          
        </div>
      </div>
      
      <div class="row">
        
            <?php 
              if ($session_user_admin == 1){
                echo '
                <div class="col-sm">
                  <form method="post" action="banedituser.php">
                    <label>Stato BAN</label><br>
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                      <input type="radio" class="btn-check" name="ban" id="ban1" value="1" autocomplete="off" '.$check1.'>
                      <label class="btn btn-outline-success" for="ban1">Attivo</label>

                      <input type="radio" class="btn-check" name="ban" id="ban2" value="0" autocomplete="off" '.$check2.'>
                      <label class="btn btn-outline-danger" for="ban2">Disattivo</label>
                    </div>
                    <br><br>
                    
                    <label>Motivo Ban</label>
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Descrive il motivo del Ban" name="nota" id="nota" style="height: 100px">'.$row['MOTIVOBAN'].'</textarea>
                      <label for="nota">Descrive il motivo del Ban</label>
                    </div>
                    <div class="input-group mb-3">
                      <input class="form-control" type="text" id="user" name="user" placeholder="Utente" value="'.$row['ID'].'" required hidden>
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Modifica BAN <i class="fas fa-edit"></i></button>
                  </form>
                </div>
                ';
              }else{
                echo '';
              }
            ?>
          
        <div class="col-sm">
            
        </div> 
        <div class="col-sm">

        </div>
      </div> 
    </div>

<?php
}else{header('location: ../sito/ban.php');}
}else{header('location: ../sito/ban.php');}
}else{header('Location: ../index.php?error=3');}
  echo $footer;
  echo $js2;
?>  
