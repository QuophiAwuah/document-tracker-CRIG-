<?php require_once 'core/connect.php'; ?>
<?php include 'helpers.php'; ?>


<?php
$errors = array();

  if(isset($_POST['submit'])){
       $username = mysqli_real_escape_string($_POST['username']);
       $password = mysqli_real_escape_string($_POST['password']);

       if(empty($username)){
         array_push($errors,"username required");
       }


        if(empty($password)){
            array_push($errors,"password required");
        }
  }

 ?>
