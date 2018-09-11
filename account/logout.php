<?php require '../core/connect.php'; ?>
<?php
session_start();
unset($_SESSION['account_password']);
unset($_SESSION['account_username']);
session_destroy();
setcookie(PHPSESSID,session_id(),time()-1);
header('Location: login.php');


 ?>
