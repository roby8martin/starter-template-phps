<?php
	session_start();
	include '../dbconfig.php';
	include 'error.php';

	$email = $_GET['email'] ?? '';

	$sql= 'SELECT `EMAIL`, `ATTIVO` FROM `USERS` WHERE `EMAIL` = "'.$email.'"';
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);

	if ($row['1'] === '1') {
		$sql1= 'UPDATE `USERS` SET `ATTIVO` = "0" WHERE `EMAIL` = "'.$email.'"';
		$result1 = mysqli_query($conn, $sql1);
		echo '<!doctype html>
<html lang="it">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <title>ACMD</title>

    <!-- Favicon -->
    <link  rel = "apple-touch-icon"  dimensioni = "57x57"  href = "img/favicon/apple-icon-57x57.png" > 
    <link  rel = "apple-touch-icon"  dimensioni = "60x60"  href = "img/favicon/ apple -icon-60x60.png " > 
    <link  rel = " apple-touch-icon "  dimensioni = " 72x72 "  href = "img/favicon/apple-icon-72x72.png " > 
    <link  rel = " apple-touch-icon "  dimensioni = "76x76"  href = "img/favicon/apple-icon-76x76.png" > 
    <link  rel = "apple-touch-icon "  dimensioni = " 114x114 "  href = "img/favicon/apple-icon-114x114.png "> 
    <link  rel = "apple-touch-icon"  dimensioni = "120x120"  href = "img/favicon/apple-icon-120x120.png" > 
    <link  rel = "apple-touch-icon"  dimensioni = "144x144"  href = "img/favicon/apple-icon-144x144.png " > 
    <link  rel = " apple-touch-icon "  dimensioni = " 152x152 "  href = "img/favicon/apple-icon-152x152.png " > 
    <link  rel = " apple-touch-icon "  dimensioni = "180x180"  href = "img/favicon/apple-icon-180x180.png" > 
    <link  rel = "icon"  type = "image / png"  dimensioni = "192x192"  href = "img/favicon/android-icon-192x192.png" > 
    <link  rel = "icon"  type = "image / png"  dimensioni = "32x32"  href = "img/favicon/favicon-32x32.png" > 
    <link  rel = "icon"  type = "image / png"  dimensioni = "96x96"  href = "img/favicon/favicon-96x96.png" > 
    <link  rel = " manifest " href = "img/favicon/manifest.json" > 
    <meta  name ="msapplication-TileColor"  content = "#ffffff" > 
    <meta  name = "msapplication-TileImage"  content = "img/favicon/ms-icon-144x144.png" > 
    <meta  name = "theme-color"  content = "#ffffff" >
  </head>
  
  <body>
    <nav class="navbar navbar-dark bg-success navbar-expand-lg">
      <a class="navbar-brand" href="index.php">
        <img src="img/Logo.jpg" width="40" height="40" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Accedi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registra.php">Registrati</a>
          </li>
        </ul>
      </div>
    </nav>


    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-success">Animal Crossing Database</h1>
          <h2 class="text-danger" align="center">Ti sei cancellato da Animal Crossing Database</h2>
          <div align="center"><img src="../img/ACtriste.gif" alt="gif triste" width="200"></div>
        </div>
      </div>
    </div>



  <!-- Footer -->
  <footer>
    <div class="container">
      <hr>
        <p class="text-muted" aligne="centre">
          <em>
            Web site developed by Roby8martin <a href="https://github.com/roby8martin/Animal-Crossing-Museum-Database.git" target=”_blank”>github</a>
          </em> 
        </p>
      </hr>
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
';
	}else{
		echo '<!doctype html>
<html lang="it">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <title>ACMD</title>

    <!-- Favicon -->
    <link  rel = "apple-touch-icon"  dimensioni = "57x57"  href = "img/favicon/apple-icon-57x57.png" > 
    <link  rel = "apple-touch-icon"  dimensioni = "60x60"  href = "img/favicon/ apple -icon-60x60.png " > 
    <link  rel = " apple-touch-icon "  dimensioni = " 72x72 "  href = "img/favicon/apple-icon-72x72.png " > 
    <link  rel = " apple-touch-icon "  dimensioni = "76x76"  href = "img/favicon/apple-icon-76x76.png" > 
    <link  rel = "apple-touch-icon "  dimensioni = " 114x114 "  href = "img/favicon/apple-icon-114x114.png "> 
    <link  rel = "apple-touch-icon"  dimensioni = "120x120"  href = "img/favicon/apple-icon-120x120.png" > 
    <link  rel = "apple-touch-icon"  dimensioni = "144x144"  href = "img/favicon/apple-icon-144x144.png " > 
    <link  rel = " apple-touch-icon "  dimensioni = " 152x152 "  href = "img/favicon/apple-icon-152x152.png " > 
    <link  rel = " apple-touch-icon "  dimensioni = "180x180"  href = "img/favicon/apple-icon-180x180.png" > 
    <link  rel = "icon"  type = "image / png"  dimensioni = "192x192"  href = "img/favicon/android-icon-192x192.png" > 
    <link  rel = "icon"  type = "image / png"  dimensioni = "32x32"  href = "img/favicon/favicon-32x32.png" > 
    <link  rel = "icon"  type = "image / png"  dimensioni = "96x96"  href = "img/favicon/favicon-96x96.png" > 
    <link  rel = " manifest " href = "img/favicon/manifest.json" > 
    <meta  name ="msapplication-TileColor"  content = "#ffffff" > 
    <meta  name = "msapplication-TileImage"  content = "img/favicon/ms-icon-144x144.png" > 
    <meta  name = "theme-color"  content = "#ffffff" >
  </head>
  
  <body>
    <nav class="navbar navbar-dark bg-success navbar-expand-lg">
      <a class="navbar-brand" href="index.php">
        <img src="img/Logo.jpg" width="40" height="40" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Accedi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registra.php">Registrati</a>
          </li>
        </ul>
      </div>
    </nav>


    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-success">Animal Crossing Database</h1>
          <h2 class="text-danger" align="center">Sei gia stato cancellato da Animal Crossing Database</h2>
          <div align="center"><img src="../img/ACtriste.gif" alt="gif triste" width="200"></div>
        </div>
      </div>
    </div>



  <!-- Footer -->
  <footer>
    <div class="container">
      <hr>
        <p class="text-muted" aligne="centre">
          <em>
            Web site developed by Roby8martin <a href="https://github.com/roby8martin/Animal-Crossing-Museum-Database.git" target=”_blank”>github</a>
          </em> 
        </p>
      </hr>
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
';
	}
?>