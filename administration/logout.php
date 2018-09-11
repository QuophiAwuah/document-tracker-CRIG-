<?php require '../core/connect.php'; ?>
<?php
session_start();
unset($_SESSION['adm_password']);
unset($_SESSION['adm_username']);
session_destroy();
setcookie(PHPSESSID,session_id(),time()-1);
header('Location: login.php');


 ?>
