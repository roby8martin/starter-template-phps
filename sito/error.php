<?php
include 'struttura.php';
include 'navbar.php';
#include '../dbconfig.php';
$errore1=''.$header.'
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>!!ATTENZIONE!!</strong> Hai sbagliato il nome utente o l\'utente non esiste riprova qui sotto altrimenti contatta il webmaster.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> 
';

$errore2=''.$header.'
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>!!ATTENZIONE!!</strong> Hai lasciato tutti i campi vuoti riprova qui sotto.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';

$errore3='
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>!!ATTENZIONE!!</strong> Non hai eseguito il login. Per favore compila i dati qui sotto!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>  
';

$errore4=''.$header2.'
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>!!ATTENZIONE!!</strong> Compila tutti i campi.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';

$errore5=''.$header2.'
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>!!ATTENZIONE!!</strong> L&#39 username non è valido. Sono ammessi solamente caratteri alfanumerici e l&#39underscore. Lunghezza minina 3 caratteri. Lunghezza massima 20 caratteri.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';

$errore6=''.$header2.'
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>!!ATTENZIONE!!</strong> Lunghezza minima password 8 caratteri lunghezza massima password 20 caratteri.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

$errore7=''.$header2.'
<div class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>!!ATTENZIONE!!</strong> Username già in uso prova un altro username😉.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

$errore8=''.$header2.'
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>!!ERRORE!!</strong> C\'è stato un errore riprova tra qualche istante.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

$errore9=''.$header2.'
<div class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>!!ATTENZIONE!!</strong> Email📧 già in uso prova un altra email😉.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

$errore10=''.$header2.'
<div class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>!!ATTENZIONE!!</strong> Le password non combaciano🤷‍♂️ riprova.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

$errore11 = ''.$header.'
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>!!ERRORE!!</strong> L\'email è gia stata confermata esegui il login.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>';

$errore12='
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>!!ATTENZIONE!!</strong> Hai sbagliato la password riprova.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> 
';

$errore13='
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>!!ATTENZIONE!!</strong> Non hai confermato la tua email controlla nella tua casella postale o nella SPAM e confermala premendo il bottone <strong>"Conferma Email"</strong>.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> 
';

$errore14='
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>!!ATTENZIONE!!</strong> Le password nuove non coincidono riprovare.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> 
';

$pwok = '
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>!!PASSWORD CAMBIATA CON SUCCESSO!!</strong> 🥳</a>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>';

/*$ok = '
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>!!REGISTRAZIONE EFFETUATA CON SUCCESSO!!</strong> Prima di procedere conferma l\'email che è stata spedita, poi <a class="alert-link" href="../index.php">vai a login.</a>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>';*/

$ok = '
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>!!REGISTRAZIONE EFFETUATA CON SUCCESSO!!</strong></a>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>';

$okattivo = ''.$header.'
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>!!HAI CONFERMATO L\'EMAIL!! ESEGUI IL LOGIN</strong></a>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>';
?>