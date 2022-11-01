<?php
use PhpMyAdmin\Server\Select;
  include 'sito/struttura.php';
  include 'sito/navbar.php';
  include 'sito/error.php';
  echo $login;
  if (isset($_GET['error'])) {
    switch ($_GET['error']) {
      case '1': echo $errore1; break;
      case '2': echo $errore2; break;
      case '3': echo $errore3; break;
      case '4': echo $errore4; break;
      case '5': echo $errore5; break;
      case '6': echo $errore6; break;
      case '7': echo $errore7; break;
      case '8': echo $errore8; break;
      case '9': echo $errore9; break;
      case '10': echo $errore10; break;
      case '11': echo $errore11; break;
      case '12': echo $errore12; break;
      case '13': echo $errore13; break;
      case 'ok': echo $ok; break;
      case 'okattivo': echo $okattivo; break;
      default: break;
    }
  }
?>
  <!-- Sito Web-->
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Hello world</h1> 
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm">
        <h4>Esegui il login</h4><br>
        <form method="post" action="sito/login.php">
          <label>Username</label>
          <div class="input-group mb-3">
            <input class="form-control" type="text" id="username" placeholder="Username" name="username" ><!-- required -->
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span><br>
          </div>
          <label>Password</label>
          <div class="input-group mb-3">
            <input class="form-control" type="password" id="password" placeholder="Password" name="password" ><!-- required -->
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span><br>
          </div>
            <button type="submit" class="btn btn-outline-primary" name="login">Accedi</button>
        </form>
      </div>
      <div class="col-sm">
        
      </div>
      <div class="col-sm">

      </div>
    </div>
  </div>

<?php
  echo $js;
  echo $footer;
?>