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
?>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>Hello World</h1> 
          <h2> Ciao <?php echo $session_user?> 👋 </h2>
          <?php if ($session_user_admin == 1){echo '<h4>Privilegi admin attivi</h4> <br>';}else{echo '';}?>
          <h2>Impostazioni sito <i class="fas fa-cog fa-spin"></i></h2> 
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm">
            <form method="post" action="pwedit.php">
              <label>Password attuale</label>
              <div class="input-group mb-3">
                <input class="form-control" type="password" id="password" name="password" placeholder="Password attuale" required>
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span><br>
              </div>
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
              <button type="submit" class="btn btn-outline-primary">Modifica <i class="fas fa-edit"></i> password <i class="fas fa-key"></i></button>
            </form>
        </div>
        <div class="col-sm">
          <div align="center">
            <?php 
              if ($session_user_admin == 1){
                echo '
                  <h4>Impostazioni admin <i class="fas fa-users-cog"></i></h4>
                  <a href="utenti.php" class="btn btn-outline-primary">Modifica utenti Sito Web <i class="fas fa-user-cog"></i></a><br><br>
                ';
              }else{
                echo '';
              }
            ?>
          </div>
        </div> 
        <div class="col-sm">
          <div align="center">  
            <br>
            <input type="checkbox" id="darkSwitch">
            <label for="darkSwitch">Night</label> 
            <h4>Attiva la Dark Mode<h4> 
            <font color="#ffffff"><h1> WOW LA MODALITÀ NOTTEO </h1></font>
          </div>
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
