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
      case 'ok': echo $pwok; break;
      default: break;
    }
  }

  $utente = $_GET['utente'];
  $sql = 'SELECT * FROM `USERS` WHERE `ID` LIKE "'.$utente.'"';
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  
?>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>Hello World</h1> 
          <h2> Ciao <?php echo $session_user?> 👋 </h2>
          <?php if ($session_user_admin == 1){echo '<h4>Privilegi admin attivi</h4> <br>';}else{echo '';}?>
          <h2>Stai modificando la passowrd di <?php echo $row['USERNAME'] ?> <i class="fas fa-user"></i></h2> 
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
                  <form method="post" action="pwedituser.php">
                    <label>Password nuova</label>
                    <div class="input-group mb-3">
                      <input class="form-control" type="password" id="pw1" name="pw1" placeholder="Password nuova" required>
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span><br>
                    </div>
                    <label>Ripeti password nuova</label>
                    <div class="input-group mb-3">
                      <input class="form-control" type="password" id="pw2" name="pw2" placeholder="Ripeti password nuova" required>
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span><br>
                    </div>
                    <div class="input-group mb-3">
                      <input class="form-control" type="text" id="user" name="user" placeholder="Utente" value="'.$row['ID'].'" required hidden>
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Modifica <i class="fas fa-edit"></i> password <i class="fas fa-key"></i></button>
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
