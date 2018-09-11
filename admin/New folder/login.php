<?php session_start(); ?>
<?php require '../core/connect.php'; ?>
<?php include 'includes/head.php'; ?>
<?php include 'helpers.php'; ?>

<?php
  if(isset($_SESSION['username']) && isset($_SESSION['password'])){
    header('Location: index.php');
  }
 ?>
<style media="screen">

  body{
    background-image:linear-gradient(rgba(0, 0, 0.2, 0.7),rgba(0, 0, 0.1, 0.7)),url('bac.jpg');
    /* overflow: hidden; */
    background-size: cover;
  }
  .tpad{
    padding: 20px;
    font-size: 40px;
    font-family: sans-serif;
    text-transform: uppercase;
    font-variant: small-caps;
    color: white
  }

  .but{
    margin-top: 0px
  }
.img{
    height: 470px;
    width: 360px;
    margin-left: 40%;
  }
  li{
    background-color: #ff8080;
    color: white;
    padding: 6px;
    opacity: 0.1px;
    list-style-type: none;
  }

  .logo{
    margin-left: 35%;
  }

 h1:focus{
  background-color: red;
  font-size: 50px;
}

input[type=text]:focus{
    background-color: #e5fbe5;
    color:black;
}

input[type=password]:focus{
    background-color: #e5fbe5;
    color:black;
}

</style>

<?php
 $user ="admin";
 $pass ="admin1234";

if(isset($_POST['submit'])){

  if(empty($_POST['username'])){
    echo "<li class='text-center'>Username field is empty</li><br>";
  }else
  if(empty($_POST['password'])){
  echo "<li class='text-center'>Password field is empty</li><br>";
}else
   {
     $username = sanitize($_POST['username']);
     $passwd = sanitize($_POST['password']);

    if($username == $user  && $passwd == $pass){

      $_SESSION['password'] =$passwd;
      $_SESSION['username'] =$username;


      if(isset($_SESSION['username']) || isset($_SESSION['passwd'])){
        header('Location: index.php');
      }

     }else
     {
       echo "<li class='text-center'>Invalid Credential Entered</li><br>";
     }

   }
}

 ?>
<div class="conatiner">
   <div class="col-md-12">
     <h1 class="text-center tpad">Document Tracking System</h1><hr>
     <img src="../images/track.png" class="img-responsive img" alt="">
     <div class="col-md-3">

     </div>
     <div class="col-md-6">

       <button type="button"  class="btn btn-success  btn-block but" data-target ="#myModal" name="button"  data-toggle="modal">Click Here To Login</button>

             <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
               <div class="modal-dialog modal-lg" role="document">
                 <div class="modal-content">
                 <div class="modal-header">
                   <button type="button"  class="close" name="button" data-dismiss ="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
                   <h4 class="modal-title" id="myModalLabel">Admin  <span class="glyphicon glyphicon-user"></span> </h4>
                 </div>
                 <div class="modal-body">
                   <img src="../images/user.png" alt="" class="logo">
                   <br><br><br>
                   <hr>
                   <form class="" action="login.php" method="post">
                     <label for="">Username</label><br>
                     <input type="text" class="form-control" name="username" value="">
                     <br>
                     <label for="">Password</label><br>
                     <input type="password" class="form-control" name="password" value="">
                     <br>
                     <input type="submit" name="submit" value="login" class="btn btn-success form-control">
                   </form>
                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-danger" data-dismiss="modal" name="button">Cancel</button>
                 </div>
               </div>
               </div>
             </div>
     </div>
     <div class="col-md-3">

     </div>
   </div>
</div>

<!-- <div class="container foot">
  <footer><p class="text-center">copyright@crig.org</p></footer>
</div> -->
<script src="js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
 <script type="text/javascript">
     $(document).ready(function(){
       $('.but').click(function(){
        $('body').css(function({
          background: yellow;
        }))
       });
     });
 </script>
<script type="text/javascript">
//     function autoRefreshPage()
//     {
//         window.location = window.location;
//     }
//     setInterval('autoRefreshPage()', 10000);
// </script>
</body>
</html>
