

<?php
function sanitize($dirty){
  return htmlentities($dirty,ENT_QUOTES,"UTF-8");
}

function login($username){
  session_start();
  $_SESSION['user'] = $username;
  global $db;
  $_SESSION['success_flash'] = 'you are now logged in';
    echo  $_SESSION['pass'];
    header('Location: index.php');
  // header('Location: index.php');
}

function is_logged_in(){
  if (isset($_SESSION['pass'])) {
    return true;
  }
  return false;
}

function login_error_redirect($url ='login.php'){
  $_SESSION['error_flash'] ='you must be logged in to access that page';
  header('Location: '.$url);
}
 ?>
