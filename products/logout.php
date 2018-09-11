<?php require '../core/connect.php'; ?>
<?php
session_start();
unset($_SESSION['product_password']);
unset($_SESSION['product_username']);
session_destroy();
setcookie(PHPSESSID,session_id(),time()-1);
header('Location: login.php');


 ?>
