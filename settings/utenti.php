<?php
session_start();
include '../sito/error.php';
include '../sito/struttura.php';
include '../sito/controlloban.php';
if (isset($_SESSION['session_id'])) {
if (isset($_SESSION['ban'])) {
if ($rowban['BAN'] === '0') {
include '../sito/navbar.php';
include '../mobile/Mobile_Detect.php';

	$session_user = htmlspecialchars($_SESSION['session_user'], ENT_QUOTES, 'UTF-8');
  $session_user_admin = htmlspecialchars($_SESSION['session_user_admin']);
	$session_id = htmlspecialchars($_SESSION['session_id']);

  if ($session_user_admin == '1') {
?>
  <?php echo $settings ?>  
    <div class="container">
      <div class="row">
        <div class="col-sm-10">
          <h1 class="mb-3">Hello World</h1> 
          <h2> Ciao <?php echo $session_user?> 👋 </h2>
          <?php if ($session_user_admin == 1){echo '<h4>Privilegi admin attivi</h4> <br>';}else{echo '';}?>
          <h2>Lista utenti sito web </h2><br>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <a href="index.php" class="btn btn-outline-primary">Torna indietro <i class="fas fa-chevron-left"></i></a>
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
        <div class="col-sm-4">
          
        </div>
        <div class="col-sm-4">
          
        </div>
      </div>
      <div class="table-responsive">
        <?php
            $sql = 'SELECT * FROM `USERS` WHERE `USERNAME` NOT LIKE "'.$session_user.'" AND CESTINO = "0" ORDER BY `USERNAME` ASC';
            if($result = mysqli_query($conn, $sql)){
              if(mysqli_num_rows($result) > 0){
                echo '<table class="table">
                  <thead>
                    <tr>
                      <th>NOME👨🏻‍💻</th>
                      <th>UTENTE ATTIVO✅</th>
                      <th>ADMIN🤴🏻</th>
                      <th>BANNATO🚫</th>
                      <th>MOTIVO BAN📜</th>
                      <th>DATA CREAZIONE</th>
                      <th>AZIONI</th>
                    </tr>
                  </thead>';
                  while($row = mysqli_fetch_array($result)){
                    if ($row["ATTIVO"] == 1){
                      $attivo='<h4 class="text-success">SI</h4>';
                    }
                    else{
                      $attivo='<h4 class="text-danger">NO</h4>';
                    }   
                    if ($row["ADMIN"] == 1){
                      $admin='<h4 class="text-success">SI</h4>';
                    }
                    else{
                      $admin='<h4 class="text-danger">NO</h4>';
                    }         
                    if ($row["BAN"] == 1){
                      $ban='<h4 class="text-success">SI</h4>';
                    }
                    else{
                      $ban='<h4 class="text-danger">NO</h4>';
                    }               
                    echo '
                    <tr>
                      <td><b>'.$row['USERNAME'].'</b></td>
                      <td>'.$attivo.'</td>
                      <td>'.$admin.'</td>
                      <td>'.$ban.'</td>
                      <td>'.$row['MOTIVOBAN'].'</td>
                      <td>'.$row['DATA'].'</td>
                      <td><a href="adminedit.php?utente='.$row['ID'].'&stato='.$row['ADMIN'].'" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-html="true" title="<b>MODIFICA ADMIN UTENTE</b> '.$row['USERNAME'].'"><i class="fas fa-user-cog"></i></a> <a href="banedit.php?utente='.$row['ID'].'" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-html="true" title="<b>MODIFICA BAN UTENTE</b> '.$row['USERNAME'].'"><i class="fas fa-user-slash"></i></a> <a href="pwuser.php?utente='.$row['ID'].'" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-html="true" title="<b>CAMBIA LA PASSWORD</b> di '.$row['USERNAME'].'"><i class="fas fa-undo"></i></a> <a href="eliminausers.php?del='.$row['ID'].'" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-html="true" title="<h5 class=\'text-danger\'>ELIMINA DEFINITIVAMENTE L\'UTENTE</h5> <b>Non si pò più recuperare</b>"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>';
                  }
                echo '</table>';
                // Free result set
                mysqli_free_result($result);
              } else{
                echo 'Nessun utente presente nel server.';
              }
            }
          ?>
        </div>
      </div>
  </body>
</html>

<?php
}else{header('location: index.php');}
}else{header('location: ../sito/ban.php');}
}else{header('location: ../sito/ban.php');}
}else{header('Location: ../index.php?error=3');}
echo $footer;
echo $js2;
?>