<?php require '../core/connect.php'; ?>
<?php require 'helpers.php'; ?>
<?php session_start()?>
<?php
 if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
  header('Location: login.php');
}
?>

<link rel="stylesheet" href="styles.css">
<?php include 'includes/head.php'; ?>

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
 /* .btn-default{
   background-color: #3dd376 ;
   color: white;
 } */

</style>
<?php
   $adm_fetch ="SELECT * FROM files WHERE sender_division LIKE '%Administration%' AND deleted = '0' ORDER BY id";
 $adms_query=$db->query($adm_fetch);
 $count_adms =mysqli_num_rows($adms_query);
 ?>
<div class="container docu">
  <?php include 'includes/navigation.php'; ?>
    <div class="row">
   <?php include 'includes/sidebar.php'; ?>

    <div class="col-md-9">
   <div class="panel">
     <div class="panel-heading ">
         <h5 class="text-center">All Adminstration Outbox ~ <span class="badge badge-warning"><?=$count_adms ?></span></h5>
     </div>
     <div class="panel-body">
   <table class="table table-striped table-condensed">
     <thead>
        <th>edit</th>
       <th>file#</th>
       <th>sender </th>
       <th>S.Division</th>
       <th>Receipient</th>
       <th>R.Division</th>
       <th>date</th>
       <th>view</th>
       <th>remove</th>
     </thead>
     <tbody>
       <?php while($admin = mysqli_fetch_assoc($adms_query)): ?>
       <tr class="bg-info">
        <td><a href="edit.php?edit=<?=$admin['id'] ?>" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span> </a></td>
         <td><?=$admin['doc_id'] ?></td>
         <td><?=$admin['sender_name'] ?></td>
         <td><?=$admin['sender_division'] ?></td>
         <td><?=$admin['receipient_name'] ?></td>
         <td><?=$admin['reciepient_division'] ?></td>
         <td><?=$admin['cur_date'] ?></td>
         <td><a href="view_document.php?view=<?=$admin['id'] ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-eye-open"></span> </a></td>
         <td><a href="archived.php?delete=<?=$admin['id'] ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span> </a></td>
       <?php endwhile; ?>
       </tr>
    </tbody>
   </table>
    </div>
   </div>
    </div>
  </div>


</div>




<?php include 'includes/footer.php'; ?>
