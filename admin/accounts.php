<?php require '../core/connect.php'; ?>
<?php require 'helpers.php'; ?>

<?php session_start()?>
<?php
 if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
  header('Location: login.php');
}
?>

<?php include 'includes/head.php'; ?>
<link rel="stylesheet" href="styles.css">

<style media="screen">

 nav{
  margin-top: 5%;
 }
 .panel-heading{
   background-color: #5cb85c;
   color: white;
 }
 .activ a{
   background-color: green;
   color: white;
 }

 body{
   margin: 0;
   padding: 0;
   background-color: #efeff3;
 }

</style>
<?php
 if (isset($_GET['delete']) && !empty($_GET['delete'])) {
   $del_id=(int)$_GET['delete'];
   $del_id=sanitize($del_id);
   $sql1="UPDATE files SET deleted =1  WHERE id ='$del_id'";
   $db->query($sql1);
   // header('Location: view.php');
 }

 ?>

<?php
 $accounts_fetch ="SELECT * FROM files WHERE sender_division LIKE 'accounts%' ORDER BY id";
 $accounts_query=$db->query($accounts_fetch);
 $count_account =mysqli_num_rows($accounts_query);
 ?>
<div class="container docu">
  <?php include 'includes/navigation.php'; ?>
    <div class="row">
   <?php include 'includes/sidebar.php'; ?>

    <div class="col-md-9">
   <div class="panel ">
     <div class="panel-heading panel-heading-custom">
         <h5 class="text-center">All Accounts Outbox ~ <span class="badge badge-warning"><?=$count_account ?></span></h5>
     </div>
     <div class="panel-body">
   <table class="table table-striped table-condensed">
     <thead>
        <th>edit</th> 
       <th>Id</th>
       <th>Sender</th>
       <th>S.Division</th>
       <th>Receipient</th>
       <th>R.Division</th>
       <th>date</th>
       <th>view</th>
       <th>remove</th>
     </thead>
     <tbody>
       <?php while($accounts = mysqli_fetch_assoc($accounts_query)): ?>
       <tr class="bg-info">
         <td><a href="edit.php?edit=<?=$accounts['id'] ?>" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span> </a></td>
         <td><?=$accounts['doc_id']?></td>
         <td><?=$accounts['sender_name']?></td>
         <td><?=$accounts['sender_division']?></td>
         <td><?=$accounts['receipient_name']?></td>
         <td><?=$accounts['reciepient_division']?></td>
         <td><?=$accounts['cur_date']?></td>
         <td><a href="view_document.php?view=<?=$accounts['id'];?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-eye-open"></span></a></td>
         <td><a href="accounts.php?delete=<?=$accounts['id'];?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span></a></td>
       <?php endwhile ?>
     </tr>
     </tbody>
   </table>
     </div>

   </div>
    </div>
  </div>


</div>




<?php include 'includes/footer.php'; ?>
