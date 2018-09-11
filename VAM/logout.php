<?php require '../core/connect.php'; ?>
<?php
session_start();
unset($_SESSION['vam_password']);
unset($_SESSION['vam_username']);
session_destroy();
setcookie(PHPSESSID,session_id(),time()-1);
header('Location: login.php');


 ?>
