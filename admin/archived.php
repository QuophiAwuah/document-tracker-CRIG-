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

<div class="container docu">
  <?php include 'includes/navigation.php'; ?>
    <div class="row">
   <?php include 'includes/sidebar.php'; ?>



<!-- delete file completely for database -->
<?php
 if (isset($_GET['delete']) && !empty($_GET['delete'])) {
   $del_id=(int)$_GET['delete'];
   $del_id=sanitize($del_id);
   $sql1="DELETE FROM files WHERE id ='$del_id'";
   $db->query($sql1);
 }
 ?>

 <!--  restore temporary deleted files-->
 <?php
  if (isset($_GET['restore']) && !empty($_GET['restore'])) {
    $res_id=(int)$_GET['restore'];
    $res_id=sanitize($res_id);
    $sql1="UPDATE files SET deleted =0  WHERE id ='$res_id'";
    $db->query($sql1);
  }
  ?>


    <div class="col-md-9">
   <div class="panel ">
     <div class="panel-heading panel-heading-custom">
      <h5 class="text-center">All Archived Documents</h5>
     </div>
     <div class="panel-body">
   <table class="table table-striped table-condensed">
     <thead>
       <th>Id</th>
       <th>Sender</th>
       <th>S.Division</th>
       <th>Receipient</th>
       <th>R.Division</th>
       <th>time</th>
       <th>date</th>
       <th>delete</th>
       <th>restore</th>
     </thead>
     <tbody>
       <?php while($archive = mysqli_fetch_assoc($arch_Q)): ?>
       <tr class="bg-info">
         <td><?=$archive['doc_id']?></td>
         <td><?=$archive['sender_name']?></td>
         <td><?=$archive['sender_division']?></td>
         <td><?=$archive['receipient_name']?></td>
         <td><?=$archive['reciepient_division']?></td>
         <td><?=$archive['cur_time'] ?></td>
         <td><?=$archive['cur_date']?></td>
         <td><a href="archived.php?remove=<?=$archive['id'];?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-remove-sign"></span></a></td>
         <td><a href="archived.php?restore=<?=$archive['id'];?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-refresh"></span></a></td>
       <?php endwhile ?>
     </tr>
     </tbody>
   </table>
     </div>

   </div>
    </div>
  </div>


</div>
