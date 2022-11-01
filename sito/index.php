<?php
session_start();
include 'error.php';
include 'struttura.php';
include '../sito/controlloban.php';
if (isset($_SESSION['session_id'])) {
if (isset($_SESSION['ban'])) {
if ($rowban['BAN'] === '0') {
include 'navbar.php';

	$session_user = htmlspecialchars($_SESSION['session_user'], ENT_QUOTES, 'UTF-8');
	$session_id = htmlspecialchars($_SESSION['session_id']);

?>
  <?php echo $home ?>  
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="mb-3">Hello World</h1> 
        
          <h2> Ciao <?php echo $session_user;?> 👋 </h2>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        
      </div>
    </div>

    <!-- Footer -->
    <?php
      echo $js2;
      echo $footer;
    ?>
    
  </body>
</html>

<?php
}else{header('location: ban.php');}
}else{header('location: ban.php');}
}else{header('Location: ../index.php?error=3');}
?>