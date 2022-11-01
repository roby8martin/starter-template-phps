<?php
session_start();

if (isset($_SESSION['session_id'])) {
    unset($_SESSION['session_id']);
    unset($_SESSION['ban']);
    unset($_SESSION['session_user_admin']);
}
header('Location: ../index.php');
exit;